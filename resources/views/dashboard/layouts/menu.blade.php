<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
        <div class=" menu-active-bg">
            <div class="menu-item">
                <a class="menu-link {{ isActiveRoute('home') }}" href="{{route('home')}}">
                    <span class="menu-bullet">
                        <span class="fa fa-home"></span>
                    </span>
                    <span class="menu-title">
                        الرئيسية
                    </span>
                </a>
            </div>
        </div>
    </div>

<div class="menu-item">
    <div class="menu-content pt-8 pb-2">
        <span class="menu-section  text-uppercase fs-8 ls-1" style="color:#fff !important">أعدادت المنصة <i class="fa fa-cog"></i></span>
    </div>
</div>

@can('roles.index')
    <!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['roles.index' , 'roles.create' , 'roles.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['roles.index' , 'roles.create' , 'roles.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/roles.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.roles')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('roles.index') }}" class="menu-link py-3  {{ isActiveRoute('roles.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.roles')])</span>
            </a>
        </div>
        <!--end::Menu item-->


        @can('roles.create')
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('roles.create')}}" class="menu-link py-3 {{ isActiveRoute('roles.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.role')])</span>
            </a>
        </div>
        <!--end::Menu item-->
        @endcan
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 
   
@can('admins.index')
    <!--begin::Menu item-->
    <div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['admins.index' , 'admins.create' , 'admins.edit'])}}" data-kt-menu-trigger="click">
        <!--begin::Menu link-->
        <a href="#" class="menu-link py-3 {{areActiveRoutes(['admins.index' , 'admins.create' , 'admins.edit'])}}">
            <span class="menu-icon">
                    <img src="{{ asset('images/admins.png') }}" style="width:25px;height:25px">
            </span>
            <span class="menu-title">@lang('dashboard.admins')</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu link-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-accordion pt-3">
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{ route('admins.index') }}" class="menu-link py-3  {{ isActiveRoute('admins.index') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.admins')])</span>
                </a>
            </div>
            <!--end::Menu item-->

            @can('admins.create')
            <!--begin::Menu item-->
            <div class="menu-item">
                <a href="{{route('admins.create')}}" class="menu-link py-3 {{ isActiveRoute('admins.create') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.admin')])</span>
                </a>
            </div>
            @endcan 
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
@endcan 





{{--  --}}
@can('property_types.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['property_types.index' , 'property_types.create' , 'property_types.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['property_types.index' , 'property_types.create' , 'property_types.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/categories.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.property_types')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('property_types.index') }}" class="menu-link py-3  {{ isActiveRoute('property_types.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.property_types')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('property_types.create')}}" class="menu-link py-3 {{ isActiveRoute('property_types.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.category')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 


@can('cities.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['cities.index' , 'cities.create' , 'cities.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['cities.index' , 'cities.create' , 'cities.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/cities.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.cities')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('cities.index') }}" class="menu-link py-3  {{ isActiveRoute('cities.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.cities')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('cities.create')}}" class="menu-link py-3 {{ isActiveRoute('cities.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.cities')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 
@can('neighborhoods.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['neighborhoods.index' , 'neighborhoods.create' , 'neighborhoods.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['neighborhoods.index' , 'neighborhoods.create' , 'neighborhoods.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/neighborhoods.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.neighborhoods')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('neighborhoods.index') }}" class="menu-link py-3  {{ isActiveRoute('neighborhoods.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.neighborhoods')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('neighborhoods.create')}}" class="menu-link py-3 {{ isActiveRoute('neighborhoods.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.neighborhoods')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 


<!-- projects -->
@can('neighborhoods.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['projects.index' , 'projects.create' , 'projects.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['projects.index' , 'projects.create' , 'projects.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/neighborhoods.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.projects')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('projects.index') }}" class="menu-link py-3  {{ isActiveRoute('projects.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.projects')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('projects.create')}}" class="menu-link py-3 {{ isActiveRoute('projects.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.projects')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 
 <!-- end -->

@can('properties.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['properties.index' , 'properties.create' , 'properties.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['properties.index' , 'properties.create' , 'properties.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/properties.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.properties')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('properties.index') }}" class="menu-link py-3  {{ isActiveRoute('properties.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.properties')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('properties.create')}}" class="menu-link py-3 {{ isActiveRoute('properties.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.properties')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 
   


@can('testimonials.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['testimonials.index' , 'testimonials.create' , 'testimonials.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['testimonials.index' , 'testimonials.create' , 'testimonials.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/testimonials.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.testimonials')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('testimonials.index') }}" class="menu-link py-3  {{ isActiveRoute('testimonials.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.testimonials')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('testimonials.create')}}" class="menu-link py-3 {{ isActiveRoute('testimonials.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.testimonials')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 

<!--  -->
@can('statuses.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['statuses.index' , 'statuses.create' , 'statuses.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['statuses.index' , 'statuses.create' , 'statuses.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/status-quo.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.statuses')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('statuses.index') }}" class="menu-link py-3  {{ isActiveRoute('statuses.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.statuses')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('statuses.create')}}" class="menu-link py-3 {{ isActiveRoute('statuses.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.statuses')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 


<!--  -->
@can('contacts.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['contacts.index' , 'contacts.create' , 'contacts.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['contacts.index' , 'contacts.create' , 'contacts.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/contact-us.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.contacts')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('contacts.index') }}" class="menu-link py-3  {{ isActiveRoute('contacts.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.contacts')])</span>
            </a>
        </div>
        <!--end::Menu item-->

       
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 


<!--  -->


<!--  -->


<div class="menu-item">
    <div class="menu-content pt-8 pb-2">
        <span class="menu-section  text-uppercase fs-8 ls-1" style="color:#ebb92b !important">أعدادت العقار <i  style="color:#ebb92b !important" class="fa fa-cog"></i></span>
    </div>
</div>


@can('primary-amenities.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['primary-amenities.index' , 'primary-amenities.create','primary-amenities.show', 'primary-amenities.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['primary-amenities.index' , 'primary-amenities.create' , 'primary-amenities.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/primary-amenities.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.primary-amenities')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('primary-amenities.index') }}" class="menu-link py-3  {{ isActiveRoute('primary-amenities.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.primary-amenities')])</span>
            </a>
        </div>
        <!--end::Menu item-->

      
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 

@can('property-features.index')
<!--begin::Menu item-->
<div class="menu-item menu-sub-indention menu-accordion  {{areActiveRoutes(['property-features.index' , 'property-features.create' , 'property-features.edit'])}}" data-kt-menu-trigger="click">
    <!--begin::Menu link-->
    <a href="#" class="menu-link py-3 {{areActiveRoutes(['property-features.index' , 'property-features.create' , 'property-features.edit'])}}">
        <span class="menu-icon">
            <img src="{{ asset('images/property-features.png') }}" style="width:25px;height:25px">
        </span>
        <span class="menu-title">@lang('dashboard.property-features')</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu link-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-accordion pt-3">
        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{ route('property-features.index') }}" class="menu-link py-3  {{ isActiveRoute('property-features.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.all_title', ['page_title' => __('dashboard.property-features')])</span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item">
            <a href="{{route('property-features.create')}}" class="menu-link py-3 {{ isActiveRoute('property-features.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">@lang('dashboard.create_title', ['page_title' => __('dashboard.property-features')])</span>
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->
@endcan 





@can('settings')
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section  text-uppercase fs-8 ls-1" style="color:#a9a9ff !important">أعدادت عامة <i style="color:#a9a9ff !important" class="fa fa-cog"></i></span>
        </div>
    </div>

    <div class="menu-item">
        <a href="{{ route('settings') }}" class="menu-link py-3">
            <span class="menu-icon">
                <img src="{{ asset('images/settings.png') }}" style="width:25px;height:25px">
            </span>
            <span class="menu-title">@lang('dashboard.settings')</span>
        </a> 
    </div>
@endcan 

</div>