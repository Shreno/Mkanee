@extends('website.layouts.app')
@section('pageTitle',__('website.properties'))


@section('content')


<section class="flat-title">
    <div class="container">
        <div class="row">                      
            <div class="col-lg-12">
                <div class="title-inner">
                    <div class="title-group fs-12">
                        <a class="home fw-6 text-color-6" href="{{ route('homepage') }}">
                            @lang('website.home')
                        </a>
                        <span>
                            @lang('website.property_details')
                        </span>
                    </div>
                </div>
                <!-- Optional: Add language selector here if needed -->
            </div> 
        </div>
    </div>
</section>

            <section class="flat-slider01 style" >
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="swiper-container thumbs-swiper-row">
                                <div class="swiper-wrapper">
                                    @foreach($property->images as $image)
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img width="1110" height="624" src="{{$image->image}}" alt="{{$property->title}}">
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                  
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper-container thumbs-swiper-row1">
                                <div class="swiper-wrapper">
                                @foreach($property->images as $image)

                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img src="{{$image->image}}" alt="{{$property->title}}">

                                        </div>
                                    </div>
                                @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-property-detail" >
                    <div class="container p-relative">
                    <div class="row" >
                        <div class="col-lg-8">
                            <div class="post">
                                <div class="wrap-house wg-dream flex bg-white">
                                    <div class="box-1">
                                        <div class="title-heading fs-30 fw-7 lh-45">{{$property->title}}</div>
                                        <div class="inner-content">
                                            <h4>{{$property->project->name}}</h4>
                                        </div>
                                        <div class="inner flex">
                                            <div class="text-address"><p>{{$property->address}}</p></div>
                                        </div> 
                                    </div>
                                    <div class="box-2 text-end">
                                    <div class="moneys fs-30 fw-7 lh-45 text-color-6">${{$property->rate_per_day}}</div>
                                        <div class="icon-inner flex justify-end">
                                            <div class="view-icon flex align-center">
                                                <i class="far fa-eye"></i>
                                                <p class="text-color-2">{{$property->view}}</p>
                                            </div>
                                        </div>
                                        <div class="icon-inner flex">
                                            <div class="view-icon flex align-center">
                                                <i class="far fa-house"></i>
                                                <p class="text-color-2">{{ $property->area }} {{ __('website.area') }}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-overview wrap-style">
                                <h3 class="titles">{{ __('website.overview') }}</h3>
                                <div class="icon-wrap flex justify-space">
                                            <!--  -->
                                @foreach($property->primaryAmenities as $primaryAmenitie)

                                            <div class="box-icon">
                                            @foreach($property->Property_Sub_Amenity as $index=>$Property_Sub_Amenity)
                                            @if($Property_Sub_Amenity->subAmenities->amenity->id==$primaryAmenitie->id)


                                            <div class="inner flex">
                                                <div class="icon">
                                                    <img width="16" height="17" src="{{$Property_Sub_Amenity->subAmenities->amenity->icon}}" alt="">
                                                    
                                                </div>
                                                <div class="content">
                                                    <div class="font-2">{{$Property_Sub_Amenity->subAmenities->name}}:</div>
                                                    <div class="font-2 fw-7">{{$Property_Sub_Amenity->number}}</div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                           
                                        </div>
                                        @endforeach
                                           
                                    
                                      
                                          
                                    </div>
                                    
                                </div>
                                <div class="wrap-text wrap-style">
                                <h3 class="titles">{{ __('website.building_description') }}</h3>
                                <p class="text-1 text-color-2">{{$property->description}}</p>
                                </div>

                                <div class="nice-features internal wrap-style">
                                <h3 class="titles">{{ __('website.internal_features') }}</h3>
                                <div class="box-featured flex-two">
                                    <div class="inner">

                                    @foreach($property->propertyFeatures as $index => $propertyFeature)
        @if($propertyFeature->type == 'internal')

            {{-- افتح div جديدة عند كل 3 عناصر --}}
            @if($index % 3 == 0)
                @if($index != 0) {{-- أغلق div السابقة إذا لم تكن الأولى --}}
                    </div>
                @endif
                <div class="inner">
            @endif

            {{-- عرض العناصر --}}
            <span class="flex-three"><i class="far fa-check"></i> {{$propertyFeature->name}}</span>

        @endif
    @endforeach
                                        </div>

                                      
                                       
                                    </div>
                                </div>
                                <div class="nice-features external wrap-style">
                                <h3 class="titles">{{ __('website.external_features') }}</h3>
                                <div class="box-featured flex-two">
                                        <div class="inner">
                                        @foreach($property->propertyFeatures as $index => $propertyFeature)
        @if($propertyFeature->type == 'external')

            {{-- افتح div جديدة عند كل 3 عناصر --}}
            @if($index % 3 == 0)
                @if($index != 0) {{-- أغلق div السابقة إذا لم تكن الأولى --}}
                    </div>
                @endif
                <div class="inner">
            @endif

            {{-- عرض العناصر --}}
            <span class="flex-three"><i class="far fa-check"></i> {{$propertyFeature->name}}</span>

        @endif
    @endforeach
</div>
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-map wrap-property wrap-style">
    <h3 class="titles">{{ __('website.location_on_map') }}</h3>
    <div class="box flex">
        <ul>
            <li class="flex"><span class="one fw-6">{{ __('website.address') }}</span><span class="two">{{$property->address}}</span></li>
            <li class="flex"><span class="one fw-6">{{ __('website.city') }}</span><span class="two">{{$property->city->name}}</span></li>
            <li class="flex"><span class="one fw-6">{{ __('website.neighborhood') }}</span><span class="two">{{$property->neighborhood->name}}</span></li>
        </ul>
    </div>  
    <iframe class="map-content" src="{{$property->map}}" allowfullscreen="" loading="lazy"></iframe>                            
</div>
                            </div>                      
                            <div class="col-lg-4">
                            <aside class="side-bar side-bar-1">
                                <div class="inner-side-bar sticky-sidebar">  
                                    <div class="widget-tour widget-rent">
                                    <h3 class="widget-title title-contact">{{ __('website.contact_seller') }}</h3>

                                        <div class="author-box flex align-center">
                                            <div class="content">
                                                <p class="text-color-2">{{$settings['app_name_'.app()->getLocale().'']}}</p>
                                            </div>
                                        </div>
                                    <div class="flat-tabs style2">
                                        <div class="content-tab">
                                        <div class="content-inner tab-content">
                                        <div class="comments">
                                        <div class="comment-form">
                                            <div class="wd-find-select ">
                                                <div class="button-box sc-btn-top center flex justify-space">
                                                    <a href="https://api.whatsapp.com/send?phone={{ $settings['whatsapp'] }}" class="sc-button style-2 btn-svg">
                                                    <span>{{ __('website.whatsapp') }}</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="24px" height="24px" fill-rule="evenodd">
                                                        <path fill-rule="evenodd" d="M 24.503906 7.503906 C 22.246094 5.246094 19.246094 4 16.050781 4 C 9.464844 4 4.101563 9.359375 4.101563 15.945313 C 4.097656 18.050781 4.648438 20.105469 5.695313 21.917969 L 4 28.109375 L 10.335938 26.445313 C 12.078125 27.398438 14.046875 27.898438 16.046875 27.902344 L 16.050781 27.902344 C 22.636719 27.902344 27.996094 22.542969 28 15.953125 C 28 12.761719 26.757813 9.761719 24.503906 7.503906 Z M 16.050781 25.882813 L 16.046875 25.882813 C 14.265625 25.882813 12.515625 25.402344 10.992188 24.5 L 10.628906 24.285156 L 6.867188 25.269531 L 7.871094 21.605469 L 7.636719 21.230469 C 6.640625 19.648438 6.117188 17.820313 6.117188 15.945313 C 6.117188 10.472656 10.574219 6.019531 16.054688 6.019531 C 18.707031 6.019531 21.199219 7.054688 23.074219 8.929688 C 24.949219 10.808594 25.980469 13.300781 25.980469 15.953125 C 25.980469 21.429688 21.523438 25.882813 16.050781 25.882813 Z M 21.496094 18.445313 C 21.199219 18.296875 19.730469 17.574219 19.457031 17.476563 C 19.183594 17.375 18.984375 17.328125 18.785156 17.625 C 18.585938 17.925781 18.015625 18.597656 17.839844 18.796875 C 17.667969 18.992188 17.492188 19.019531 17.195313 18.871094 C 16.894531 18.722656 15.933594 18.40625 14.792969 17.386719 C 13.90625 16.597656 13.304688 15.617188 13.132813 15.320313 C 12.957031 15.019531 13.113281 14.859375 13.261719 14.710938 C 13.398438 14.578125 13.5625 14.363281 13.710938 14.1875 C 13.859375 14.015625 13.910156 13.890625 14.011719 13.691406 C 14.109375 13.492188 14.058594 13.316406 13.984375 13.167969 C 13.910156 13.019531 13.3125 11.546875 13.0625 10.949219 C 12.820313 10.367188 12.574219 10.449219 12.390625 10.4375 C 12.21875 10.429688 12.019531 10.429688 11.820313 10.429688 C 11.621094 10.429688 11.296875 10.503906 11.023438 10.804688 C 10.75 11.101563 9.980469 11.824219 9.980469 13.292969 C 9.980469 14.761719 11.050781 16.183594 11.199219 16.382813 C 11.347656 16.578125 13.304688 19.59375 16.300781 20.886719 C 17.011719 21.195313 17.566406 21.378906 18 21.515625 C 18.714844 21.742188 19.367188 21.710938 19.882813 21.636719 C 20.457031 21.550781 21.648438 20.914063 21.898438 20.214844 C 22.144531 19.519531 22.144531 18.921875 22.070313 18.796875 C 21.996094 18.671875 21.796875 18.597656 21.496094 18.445313 Z" fill="white"/>
                                                        </svg>
</a>
                                                    <a class="sc-button style-2 btn-svg" href="tel:{{$settings['phone']}}">
                                                    <span>{{ __('website.call') }}</span>
                                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.125 7.31249C15.125 7.46168 15.0657 7.60475 14.9602 7.71024C14.8548 7.81573 14.7117 7.87499 14.5625 7.87499H11.1875C11.0383 7.87499 10.8952 7.81573 10.7898 7.71024C10.6843 7.60475 10.625 7.46168 10.625 7.31249V3.93749C10.625 3.78831 10.6843 3.64523 10.7898 3.53975C10.8952 3.43426 11.0383 3.37499 11.1875 3.37499C11.3367 3.37499 11.4798 3.43426 11.5852 3.53975C11.6907 3.64523 11.75 3.78831 11.75 3.93749V5.95499L15.29 2.41499C15.3415 2.35973 15.4036 2.3154 15.4726 2.28466C15.5416 2.25391 15.6161 2.23738 15.6916 2.23605C15.7671 2.23472 15.8422 2.24861 15.9122 2.2769C15.9822 2.30519 16.0459 2.3473 16.0993 2.40071C16.1527 2.45413 16.1948 2.51775 16.2231 2.5878C16.2514 2.65784 16.2653 2.73286 16.2639 2.80839C16.2626 2.88391 16.2461 2.9584 16.2153 3.0274C16.1846 3.0964 16.1403 3.1585 16.085 3.20999L12.545 6.74999H14.5625C14.7117 6.74999 14.8548 6.80926 14.9602 6.91475C15.0657 7.02024 15.125 7.16331 15.125 7.31249Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.625 3.375C1.625 2.77826 1.86205 2.20597 2.28401 1.78401C2.70597 1.36205 3.27826 1.125 3.875 1.125H4.904C5.549 1.125 6.1115 1.5645 6.26825 2.19L7.097 5.50725C7.16416 5.77575 7.15059 6.05809 7.058 6.31892C6.96542 6.57974 6.79792 6.80744 6.5765 6.9735L5.60675 7.701C5.5055 7.77675 5.48375 7.88775 5.51225 7.965C5.93553 9.11614 6.60395 10.1615 7.47121 11.0288C8.33847 11.8961 9.38386 12.5645 10.535 12.9877C10.6123 13.0162 10.7225 12.9945 10.799 12.8932L11.5265 11.9235C11.6926 11.7021 11.9203 11.5346 12.1811 11.442C12.4419 11.3494 12.7243 11.3358 12.9928 11.403L16.31 12.2318C16.9355 12.3885 17.375 12.951 17.375 13.5968V14.625C17.375 15.2217 17.1379 15.794 16.716 16.216C16.294 16.6379 15.7217 16.875 15.125 16.875H13.4375C6.914 16.875 1.625 11.586 1.625 5.0625V3.375Z" fill="white"/>
                                                        </svg>
                                                    </a>
                                                </div> 
                                                <div class="sc-btn-100">
                                                    <button class="sc-button btn-svg style-2" id="disabled" data-toggle="modal" data-target="#popup_bid">
                                                    <span>{{ __('website.book_viewing') }}</span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.125 6.5025V12.9375C1.125 13.5342 1.36205 14.1065 1.78401 14.5285C2.20597 14.9504 2.77826 15.1875 3.375 15.1875H14.625C15.2217 15.1875 15.794 14.9504 16.216 14.5285C16.6379 14.1065 16.875 13.5342 16.875 12.9375V6.5025L10.179 10.6223C9.82443 10.8404 9.4163 10.9559 9 10.9559C8.5837 10.9559 8.17557 10.8404 7.821 10.6223L1.125 6.5025Z" fill="white"/>
                                                            <path d="M16.875 5.181V5.0625C16.875 4.46576 16.6379 3.89347 16.216 3.47151C15.794 3.04955 15.2217 2.8125 14.625 2.8125H3.375C2.77826 2.8125 2.20597 3.04955 1.78401 3.47151C1.36205 3.89347 1.125 4.46576 1.125 5.0625V5.181L8.4105 9.6645C8.58778 9.77357 8.79185 9.83132 9 9.83132C9.20815 9.83132 9.41222 9.77357 9.5895 9.6645L16.875 5.181Z" fill="white"/>
                                                        </svg>
                                                    </button>
                                                </div> 
                                            </div>  
                                            </div>
                                        </div> 
                                    </div>
                                    </div> 
                                    </div>
                                    </div>
                                </div>
                            </aside>   
                            </div>
                    </div>   
                    </div>
                                
            </section>

            <section class="flat-sale-detail flat-sale wg-dream wg-dots tf-section">
    <div class="container">
        <div class="row">                      
            <div class="col-lg-12">
                <div class="heading-section ">
                    <div class="title-heading fs-30 lh-45 fw-7">@lang('website.more_properties')</div>
                    <h3 class="link-style-1"><a href="{{ route('all-properties.index') }}">@lang('website.view_all_properties')</a></h3>
                </div>
                @include('website.pages.home_section.property')
            </div>
        </div>
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

