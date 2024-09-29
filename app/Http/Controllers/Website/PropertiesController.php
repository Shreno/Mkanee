<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\City;
use App\Models\Project;
use App\Models\PropertyType;

class PropertiesController extends Controller
{
    public function index()
    {
        $query = Property::query();
    
        // إضافة منطق البحث
        if ($search = request('search_for')) {
            $query->where(function($q) use ($search) {
                $q->where('title->ar', 'like', '%' . $search . '%')
                  ->orWhere('title->en', 'like', '%' . $search . '%')
                  ->orWhere('title->fa', 'like', '%' . $search . '%')
                  ->orWhere('description->en', 'like', '%' . $search . '%')
                  ->orWhere('description->fa', 'like', '%' . $search . '%')
                  ->orWhere('description->en', 'like', '%' . $search . '%')
                  ->orWhere('address->fa', 'like', '%' . $search . '%')
                  ->orWhere('address->en', 'like', '%' . $search . '%')
                  ->orWhere('address->fa', 'like', '%' . $search . '%');
            });
        }
    
        if ($projectId = request('project')) {
            $query->where('project_id', $projectId);
        }
    
        if ($propertyTypeId = request('property_type')) {
            $query->where('property_type_id', $propertyTypeId);
        }
    
        if ($cityId = request('city')) {
            $query->where('city_id', $cityId);
        }
    
        // استرجاع الخصائص مع ترتيبها
        $properties = $query->orderBy('view', 'desc')->paginate(24);
        $propertiesAll = Property::count(); // عدد جميع الخصائص
        $projects = Project::all();
        $property_types = PropertyType::all();
        $cities = City::whereNotNull('image')->inRandomOrder()->get();
    
        return view('website.pages.properties', [
            'cities' => $cities,
            'properties' => $properties,
            'propertiesAll' => $propertiesAll,
            'projects' => $projects,
            'property_types' => $property_types,
        ]);
    }


    public function show($id){
        $property = Property::find($id);
        $property->view=$property->view+1;
        $property->save();
        $properties = Property::orderBy('view','desc')->get();

       

        return view('website.pages.property',[
            'property' => $property,
            'properties'=>$properties
        ]);

    }


}
