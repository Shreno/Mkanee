<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->paginate(100);
        return view('dashboard.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name.ar' => 'required|string|max:191',
            'name.en' => 'required|string|max:191',
            'name.fa' => 'required|string|max:191',
            'job_title.ar' => 'required|string|max:191',
            'job_title.en' => 'required|string|max:191',
            'job_title.fa' => 'required|string|max:191',

            'desc.ar' => 'required|string|max:191',
            'desc.en' => 'required|string|max:191',
            'desc.fa' => 'required|string|max:191',
        

            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

       

        Testimonial::create($data);

        return response()->json(['message' => 'تم إنشاء  بنجاح']);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.testimonials.create', compact('testimonial'));
    }

    public function update(Request $request, $id)

    {
        $testimonial = Testimonial::findOrFail($id);
        
        // Validation
        $data = $request->validate([
            'name.ar' => 'required|string|max:191',
            'name.en' => 'required|string|max:191',
            'name.fa' => 'required|string|max:191',
            'job_title.ar' => 'required|string|max:191',
            'job_title.en' => 'required|string|max:191',
            'job_title.fa' => 'required|string|max:191',

            'desc.ar' => 'required|string|max:191',
            'desc.en' => 'required|string|max:191',
            'desc.fa' => 'required|string|max:191',
        
        ]);

        $testimonial->update($data);
        return response()->json(['message' => 'تم التعديل بنجاح']);
    }

    public function destroy($id)
    {
        $neighborhood = Testimonial::findOrFail($id);
        $neighborhood->delete();
        return response()->json();
    }

    public function deleteAll(Request $request)
    {
        $requestIds = json_decode($request->data);
        foreach ($requestIds as $id) {
            $ids[] = $id->id;
        }
        if (Testimonial::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
            return response()->json('failed');
        }
    }
}
