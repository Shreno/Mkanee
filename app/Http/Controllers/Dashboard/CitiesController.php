<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('created_at','desc')->get();
        return view('dashboard.cities.index' , compact('cities'));
    }

    public function create()
    {
        return view('dashboard.cities.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name.ar' => 'required|string|max:191|unique:cities,name->ar',
            'name.en' => 'required|string|max:191|unique:cities,name->en',
            'name.fa' => 'required|string|max:191|unique:cities,name->fa',

            'desc.ar'         => 'nullable|string|max:191',
            'desc.en'         => 'nullable|string|max:191',
            'desc.fa'         => 'nullable|string|max:191',

            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        
        City::create($data);
        return response()->json();
    }


    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('dashboard.cities.create' , compact('city'));
    }

    public function update(Request $request, $id)
    {
        // العثور على المدينة المحددة أو إرجاع خطأ 404 إذا لم توجد
        $city = City::findOrFail($id);
    
        // التحقق من صحة المدخلات
        $data = $request->validate([
            'name.ar' => [
                'required',
                'string',
                'max:191',
                Rule::unique('cities', 'name->ar')->ignore($city->id),
            ],
            'name.en' => [
                'required',
                'string',
                'max:191',
                Rule::unique('cities', 'name->en')->ignore($city->id),
            ],
            'name.fa' => [
                'required',
                'string',
                'max:191',
                Rule::unique('cities', 'name->fa')->ignore($city->id),
            ],
            'desc.ar' => 'nullable|string|max:191',
            'desc.en' => 'nullable|string|max:191',
            'desc.fa' => 'nullable|string|max:191',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
    
        return response()->json();
        
        // تحديث المدينة باستخدام البيانات التي تم التحقق منها
        $city->update($data);
    
        // إرجاع استجابة JSON بعد التحديث بنجاح
        return response()->json(['message' => 'City updated successfully.', 'city' => $city]);
    }


    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return response()->json();
    }

     
    public function deleteAll(Request $request) {
        $requestIds = json_decode($request->data);
    
        foreach ($requestIds as $id) {
          $ids[] = $id->id;
        }
        if (City::whereIn('id', $ids)->delete()) {
          return response()->json('success');
        } else {
          return response()->json('failed');
        }
    }

}
