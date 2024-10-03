<section class="slider hero">
    <div class="slider-item">
        <div class="container relative">
            <div class="row">    
                <div class="col-lg-7">
                    <div class="heading">
                        <h1 class="text-color-1 wow fadeInUp">@lang('website.find_your_perfect_home')</h1>
                        <p class="fs-22 lh-24 fw-6 text-color-1 fadeInUp">@lang('website.search_properties')</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content po-content-two">
                        <div class="flat-tabs ">
                            <div class="content-tab">
                                <div class="content-inner tab-content">
                                    <div class="form-sl">
                                        <form method="get" action="{{route('all-properties.index')}}">                        
                                            <div class="wd-find-select">
                                                <div class="form-group form-group-1 ">
                                                    <div class="group-select">
                                                    <select name="project" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.project')</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ request('project') == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                    @endforeach
                </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-2 ">
                                                    <div class="group-select">
                                                    <select name="property_type" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.property_type')</option>
                    @foreach($property_types as $property_type)
                        <option value="{{ $property_type->id }}" {{ request('property_type') == $property_type->id ? 'selected' : '' }}>{{ $property_type->name }}</option>
                    @endforeach
                </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-3">
                                                    <div class="group-select">
                                                    <select name="city" class="nice-select relative">
                    <option value="" selected disabled>@lang('website.location')</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ request('city') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="form-group flex">
                                                    <div class="button-search sc-btn-top center no-absolute">
                                                        <button type="submit" class="sc-button " href="{{route('all-properties.index')}}">
                                                            <span>@lang('website.search_now')</span>
                                                            <i class="far fa-search text-color-1"></i>
</button>
                                                    </div> 
                                                    <div class="modal-button center d-md-none second" data-toggle="modal" data-target="#popup_bid">
                                                        <a class="sc-button style-2 modal-btn">
                                                            <span>@lang('website.start_real_estate_journey')</span>
                                                        </a>
                                                    </div>  
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Job Search Form-->
                                    </div> 
                                </div>
                            </div>
                        </div>                     
                    </div> 
                </div>
            </div>
        </div>
    </div>                                                                        
</section>