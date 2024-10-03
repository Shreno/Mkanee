<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use Illuminate\Validation\Rule;


use Illuminate\Support\Facades\Storage;

class PropertyTypeController extends Controller
{
  


    public function index()
    {
        $categories =PropertyType::orderBy('created_at','desc')->get();
        return view('dashboard.property_types.index' , compact('categories'));
    }

    public function create()
    {
        return view('dashboard.property_types.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name.ar' => 'required|string|max:191|unique:property_types,name->ar',
            'name.en' => 'required|string|max:191|unique:property_types,name->en',
            'name.fa' => 'required|string|max:191|unique:property_types,name->fa',

            'desc.ar'         => 'nullable|string|max:191',
            'desc.en'         => 'nullable|string|max:191',
            'desc.fa'         => 'nullable|string|max:191',

            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        
        PropertyType::create($data);
        return response()->json();
    }


    public function edit($id)
    {
        $category=PropertyType::find($id);
        return view('dashboard.property_types.edit' , compact('category'));
    }

    public function update(Request $request , $id)
    {
 // العثور على المدينة المحددة أو إرجاع خطأ 404 إذا لم توجد
 $PropertyType = PropertyType::findOrFail($id);
    
 // التحقق من صحة المدخلات
 $data = $request->validate([
     'name.ar' => [
         'required',
         'string',
         'max:191',
         Rule::unique('property_types', 'name->ar')->ignore($PropertyType->id),
     ],
     'name.en' => [
         'required',
         'string',
         'max:191',
         Rule::unique('property_types', 'name->en')->ignore($PropertyType->id),
     ],
     'name.fa' => [
         'required',
         'string',
         'max:191',
         Rule::unique('property_types', 'name->fa')->ignore($PropertyType->id),
     ],
     'desc.ar' => 'nullable|string|max:191',
     'desc.en' => 'nullable|string|max:191',
     'desc.fa' => 'nullable|string|max:191',
     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
 ]);

 
 // تحديث المدينة باستخدام البيانات التي تم التحقق منها
 $PropertyType->update($data);      
   return response()->json();
    }


    public function destroy($id)
    {
        $PropertyType = PropertyType::findOrFail($id);
        $PropertyType->delete();
        return response()->json();

    }

    
    public function deleteAll(Request $request) {
        $requestIds = json_decode($request->data);
    
        foreach ($requestIds as $id) {
          $ids[] = $id->id;
        }
        if (PropertyType::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
          return response()->json('failed');
        }
    }

}