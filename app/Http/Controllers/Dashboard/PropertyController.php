<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BookingCondition;
use App\Models\Property;
use App\Models\City;
use App\Models\Neighborhood;
use App\Models\User;
use App\Models\PrimaryAmenity;
use App\Models\SubAmenity;
use App\Models\PropertyFeature;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\PropertySubAmenity;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyUser;



class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::orderBy('id','desc')->paginate(50);

        return view('dashboard.properties.index', compact('properties'));
    }

    public function active ($property,request $request)
    {
        $property = Property::findOrFail($property);
        $property->update(['is_active'=>$request->is_active,'admin_message'=>$request->admin_message]);
        $user=User::find($property->user_id);
        if($request->admin_message!=null)
        {
            $admin_message=$request->admin_message;
        }else{
            $admin_message="";

        }

        $notifyRequest=[
            'type'=>'notify',
            'title_ar'=>'تمت الموافقة على العقار: ' . $property->getTranslation('title', 'ar'),
            'title_en'=>'The property has been approved'.$property->getTranslation('title', 'en'),
            'body_ar'=>$admin_message,
            'body_en'=>$admin_message,
        ];
       
    
 
            Notification::send($user , new NotifyUser($notifyRequest));



        return redirect()->route('properties.index');
    }

    public function show($property){
        $property = Property::findOrFail($property);
        return view('dashboard.properties.show', compact('property'));


    }


    public function create()
    {
        $cities = City::all();
        $neighborhoods = Neighborhood::all();
        $primaryAmenities = PrimaryAmenity::all();
        $subAmenities = SubAmenity::all();
        $propertyFeatures = PropertyFeature::all();
        $projects=Project::all();
        $propertyTypes=PropertyType::all();


        
        return view('dashboard.properties.create', compact('projects','cities', 'neighborhoods', 'propertyTypes', 'primaryAmenities', 'subAmenities', 'propertyFeatures'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title.ar' => 'required|string|max:191',
            'title.en' => 'required|string|max:191',
            'title.fa' => 'required|string|max:191',

            'description.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.fa' => 'required|string',

            'map' => 'nullable|string',
            'address.ar' => 'required|string|max:255',
            'address.en' => 'required|string|max:255',
            'address.fa' => 'required|string|max:255',

            'city_id' => 'required|exists:cities,id',
            'neighborhood_id' => 'required|exists:neighborhoods,id',
            'direction' => 'required|in:north,south,east,west',
            'project_id' => 'required|exists:projects,id',
            'property_type_id'=>'required|exists:property_types,id',
            'primary_amenities' => 'required|array',
            // 'sub_amenities' => 'required|array',
            'property_features' => 'required|array',
            'images' => 'required|array',
            // 'check_in_time' => 'nullable|date_format:H:i', // Validate check-in time
            // 'check_out_time' => 'nullable|date_format:H:i|after:check_in_time', // Validate check-out time
            'rate_per_day' =>'required|numeric|min:0',
            'area' =>'nullable|numeric|min:0',

        ]);

        $property = Property::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'map' => $data['map'],
            'address' => $data['address'],
            'city_id' => $data['city_id'],
            'neighborhood_id' => $data['neighborhood_id'],
            'direction' => $data['direction'],
            'project_id' => $data['project_id'],
            'property_type_id' => $data['property_type_id'],

            // 'check_in_time'=>$data['check_in_time'],
            // 'check_out_time'=>$data['check_out_time'],
            'rate_per_day'=>$data['rate_per_day'],
            'area'=>$data['area'],


        ]);

        $property->propertyFeatures()->attach($data['property_features']);

        $primaryAmenities = $request->input('primary_amenities', []);

              // Sync amenities and their quantities
    $amenities = [];
    if ($request->has('primary_amenities')) {
        foreach ($request->primary_amenities as $amenityId) {
            $quantity = $request->input('amenity_quantities.' . $amenityId, 1); // Default quantity to 1 if not provided
            $amenities[$amenityId] = ['number' => $quantity];
        }
    }

    // Attach or sync amenities with quantities
    $property->primaryAmenities()->sync($amenities);
        
        foreach ($data['images'] as $image) {
            $property->images()->create(['image' => $image]);
        }

        return redirect()->route('properties.index');
    }

    public function edit( $property)
    {
        $property = Property::findOrFail($property);
        $cities = City::all();
        $neighborhoods = Neighborhood::all();
        $primaryAmenities = PrimaryAmenity::all();
        $subAmenities = SubAmenity::all();
        $propertyFeatures = PropertyFeature::all();
        $projects=Project::all();
        $propertyTypes=PropertyType::all();


        return view('dashboard.properties.create', compact('propertyTypes','property', 'cities', 'neighborhoods', 'projects', 'primaryAmenities', 'subAmenities', 'propertyFeatures'));
    }

    public function update(Request $request,  $property)
    {
        $property = Property::findOrFail($property);
        $data = $request->validate([
          'title.ar' => 'required|string|max:191',
            'title.en' => 'required|string|max:191',
            'title.fa' => 'required|string|max:191',

            'description.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.fa' => 'required|string',

            'map' => 'nullable|string',
            'address.ar' => 'required|string|max:255',
            'address.en' => 'required|string|max:255',
            'address.fa' => 'required|string|max:255',

            'city_id' => 'required|exists:cities,id',
            'neighborhood_id' => 'required|exists:neighborhoods,id',
            'direction' => 'required|in:north,south,east,west',
            'project_id' => 'required|exists:projects,id',
            'property_type_id'=>'required|exists:property_types,id',
            'primary_amenities' => 'required|array',
            'property_features' => 'required|array',
            'images' => 'nullable|array',
            'rate_per_day' =>'required|numeric|min:0',
            'area' =>'nullable|numeric|min:0',
        ]);



    

        $property->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'map' => $data['map'],
            'address' => $data['address'],
            'city_id' => $data['city_id'],
            'neighborhood_id' => $data['neighborhood_id'],
            'direction' => $data['direction'],
            'project_id' => $data['project_id'],
            'property_type_id' => $data['property_type_id'],
            'rate_per_day'=>$data['rate_per_day'],
            'area'=>$data['area'],


            
        

        ]);

        $property->propertyFeatures()->sync($data['property_features']);
        $primaryAmenities = $request->input('primary_amenities', []);

       // Sync amenities and their quantities
    $amenities = [];
    if ($request->has('primary_amenities')) {
        foreach ($request->primary_amenities as $amenityId) {
            $quantity = $request->input('amenity_quantities.' . $amenityId, 1); // Default quantity to 1 if not provided
            $amenities[$amenityId] = ['number' => $quantity];
        }
    }

    // Attach or sync amenities with quantities
    $property->primaryAmenities()->sync($amenities);

       
        if (isset($data['images'])) {
            $property->images()->delete();
            foreach ($data['images'] as $image) {
                $property->images()->create(['image' => $image]);
            }
        }

        return back();
    }

    // 
    public function destroy($id)
    {
        $neighborhood = Property::findOrFail($id);
        $neighborhood->delete();
        return response()->json();
    }

    public function deleteAll(Request $request)
    {
        $requestIds = json_decode($request->data);
        foreach ($requestIds as $id) {
            $ids[] = $id->id;
        }
        if (Property::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
            return response()->json('failed');
        }
    }

    // 
}
