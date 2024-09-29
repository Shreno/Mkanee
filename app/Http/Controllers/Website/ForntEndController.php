<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\City;
use App\Models\Banner;
use App\Models\PropertyFeature;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\Testimonial;




class ForntEndController extends Controller
{
    public function home()
    {
        $testimonials=Testimonial::all();
        $properties = Property::orderBy('created_at','desc')->limit(8)->get();
        $propertyFeatures = PropertyFeature::all();

        $banner = Banner::first();

        $cities = City::whereNotNull('image')
                  ->inRandomOrder()
                  ->get();
        $projects=Project::all();
        $property_types=PropertyType::all();

        return view('website.pages.home',[
            'banner' => $banner,
            'cities' => $cities,
            'properties' => $properties,
            'propertyFeatures'=>$propertyFeatures,
            'projects'=>$projects,
            'property_types'=>$property_types,
            'testimonials'=>$testimonials,
        ]);
    }

    public function aboutUs(){
        return view('website.pages.aboutUs');

    }


    public function SetLanguage($lang)
    {
    
        if ( in_array( $lang, [ 'ar', 'en' ,'fa'] ) ) {

            if ( session() -> has( 'lang' ) )
                session() -> forget( 'lang' );

            session() -> put( 'lang', $lang );

        } else {
            if ( session() -> has( 'lang' ) )
                session() -> forget( 'lang' );

            session() -> put( 'lang', 'ar' );
        }
        return back();
    }}
