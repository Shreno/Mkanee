@extends('website.layouts.app')
@section('pageTitle',__('website.properties'))


@section('content')


            <div class="top-filters">
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="flat-tabs style2 flex-five">
                                <div class="content-tab">
                                    <div class="content-inner tab-content">
                                        <div class="form-sl">
                                        <form method="get" action="{{ route('all-properties.index') }}">
    <input type="hidden" name="search">
    <div class="wd-find-select flex">
        <div class="form-group-1 search-form form-style relative">
            <i class="far fa-search"></i>
            <input type="search" class="search-field" placeholder="@lang('website.keyword_placeholder')......" value="{{ request('search_for') }}" name="search_for" title="Search for">
        </div>                                            
        <div class="form-group-2 form-style">
            <div class="group-select">
                <select name="project" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.project')</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ request('project') == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group-2 form-style">
            <div class="group-select">
                <select name="property_type" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.property_type')</option>
                    @foreach($property_types as $property_type)
                        <option value="{{ $property_type->id }}" {{ request('property_type') == $property_type->id ? 'selected' : '' }}>{{ $property_type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group-3 form-style">
            <div class="group-select">
                <select name="city" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.location')</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ request('city') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>                                                    
        </div>
        <div class="button-search sc-btn-top">
            <button class="sc-button button-top" type="submit">
                <span>@lang('website.search_now')</span>
                <i class="far fa-search"></i>
            </button>
        </div> 
    </div>
</form>
                                               
                                            <!-- End Job  Search Form-->
                                        </div> 
                                    </div>
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- title page -->
            <section class="flat-title-page inner"> <div class="overlay2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">   
                                <div class="heading-inner">
                                    <div class="heading"><span>@lang('website.discover_ideal_home')</span> </div>
                                    <h4 class="sub">@lang('website.luxury_properties')</h4>                                    
                                </div>                                                 
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>

            <section class="flat-title" > 
                <div class="container6">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="title-inner style">
                                <div class="title-group fs-12"><a class="home fw-6 text-color-3" href="{{route('home')}}">@lang('website.home')</a><span >قائمة العقارات</span></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>

            <section class="flat-featured flat-property-grid flat-property tf-section wg-dream home2" >
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="category-filter flex align-center justify-space">
                                <div class="box-1 flex align-center">
                                    <div class="heading-listing fs-30 lh-45 fw-7">@lang('website.properties_list')</div><div class="heading-text">    {{ trans('website.properties_count', ['count' => count($properties)]) }}
                                    </div> 
                                </div>
                            </div>
                        </div>  
                        @foreach($properties as $property)

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="box box-dream hv-one style-dream">
                                <div class="image-group relative ">

                                    <div class="swiper-container noo carousel-2 img-style" >    
                                    <a href="{{ route('all-properties.show', $property->id) }}" class="icon-plus"><img src="{{asset('assets/images/icon/plus.svg')}}" alt="images"></a>
                                    <div class="swiper-wrapper ">
                                    @foreach($property->images as $image)
                                                            <div class="swiper-slide"><img src="{{asset($image->image)}}" alt="images"></div>
                                                            @endforeach
                                        </div>
                                        <div class="pagi2"><div class="swiper-pagination2">  </div> </div>
                                        <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i></div>
                                        <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i> </div>                                        
                                    </div>
                                </div>
                                <div class="content">
                                                    <h3 class="link-style-1"><a href="{{ route('all-properties.show', $property->id) }}">{{$property->title}}</a> </h3>
                                                    <div class="text-address"><p class="p-12">{{$property->address}}</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="{{ route('all-properties.show', $property->id) }}">${{$property->rate_per_day}}</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author"><img src="{{asset($property->project->image)}}" alt="images"></div>
                                                        <div class="days">{{$property->project->name}}</div>
                                                    </div>                                           
                                                </div>
                            </div>
                        </div>
                        @endforeach

                    
                   

                       
                    </div>
                    {{ $properties->links('vendor.pagination.default') }}

                </div>
            </section>


            <section class="flat-contact2 relative">
    <div class="row align-center">                      
        <div class="col-lg-6">
            <div class="heading-section">
                <h2>@lang('website.find_your_dream_home')</h2>
                <p class="text-color-2 font-2">@lang('website.discover_your_perfect_home')</p>
                <div class="button-footer">
                    <a class="sc-button center btn-icon style-2" href="{{ route('contact_us') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>                               
                        <span>@lang('website.contact_us')</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mark-img">
                <img src="{{ asset('assets/images/mark/mark-contact2.png') }}" alt="images">
            </div>
        </div>
    </div>
</section>
@endsection