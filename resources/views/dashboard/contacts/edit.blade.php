@extends('dashboard.layouts.app')
@section('pageTitle' , __('dashboard.update_title', ['page_title' => __('dashboard.contacts')]))

@section('style')
    <link rel="stylesheet" href="{{ asset('dashboard/custom/css/intlTelInput.css') }}">
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">@lang('dashboard.update_title', ['page_title' => __('dashboard.contacts')])</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">@lang('dashboard.home')</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('contacts.index') }}"
                            class="text-muted text-hover-primary">@lang('dashboard.contacts')</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">@lang('dashboard.update', ['page_title' => __('dashboard.contacts')])</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
             
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <!--begin::Form-->
                    <form id="kt_ecommerce_add_product_form" method="POST" action="{{ route('contacts.update' , $contact->id)}}" class="form fv-plugins-bootstrap5 fv-plugins-framework store" 
                        data-kt-redirect="{{route('contacts.edit',$contact->id)}}" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                           
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">بيانات التواصل </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <input disabled type="text" name="first_name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="@lang('dashboard.first_name')" value="{{ $contact->full_name }}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                          <!--begin::Col-->
                                          <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <input disabled type="text" name="first_name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="@lang('dashboard.first_name')" value="{{ $contact->phone }}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                          <!--begin::Col-->
                                          <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <input disabled type="text" name="first_name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="المشروع" value="{{isset($contact->project) ? $contact->project->name:'' }}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                      
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            @if($contact->message!=null || $contact->message=="" )
                              <!--begin::Input group-->
                              <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">الرسالة</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Input-->

                                    <p>{{$contact->message}}</p>
                                  
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            @endif

                            
                           
                         
                          

                          

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">تغير الحالة</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Input-->
                                    <select name="status_id" aria-label="Select a Language" data-control="select2"
                                        data-placeholder="@lang('dashboard.select_language')"
                                        class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                        data-select2-id="select2-data-13-aw3u" tabindex="-1" aria-hidden="true">
                                        @foreach($statuses as $status)
                                        <option {{$contact->status_id == $status->id ? 'selected' : ""}} value="{{$status->id}}"  >{{$status->name}}</option>


                                        @endforeach
                                      

                                    </select>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Basic info-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <!--begin::Button-->
                            <a href="{{ route('contacts.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">@lang('dashboard.cancel')</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">@lang('dashboard.save_changes')</span>
                                <span class="indicator-progress">@lang('dashboard.please_wait')
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Card footer-->
                    </form>
                </div>

            </div>

            <div class="card mb-5 mb-xl-10">
                <!--begin::Deactivate Account-->
                 <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">إجراءات التواصل </h3>
                        </div>
                    </div>
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                    <button type="button" class="btn btn-info pull-center" data-toggle="modal"
                                    data-target="#status">
                                    <i class="fa fa-link"></i>
                                    أضافة تواصل
                    </button>

                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    @foreach($calls as $call)
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <!--begin::Form-->
                      
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                    <div class="row">
                                        <div class="col-md-4">{{$call->title}}</div>
                                        <div class="col-md-4">{{$call->message}}</div>
                                        <div class="col-md-4">{{$call->created_at}}</div>
                                    </div>
                                </div>
                                <!--end::Notice-->    
                    </div>
                    @endforeach
                    <!--end::Content-->
                </div>
                <!--end::Deactivate Account-->
            </div>
        </div>
        <!--end::Container-->
    </div>
</div>
@include('dashboard.contacts.model')

@endsection

@section('scripts')

    <script src="{{ asset('dashboard/custom/js/intlTelInput.js') }}"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            preferredCountries: ["sa"],
            hiddenInput: "phone",
            separateDialCode: true,
            formatOnDisplay: false,
            utilsScript: "{{ asset('dashboard/custom/js/utils.js') }}"
        });
    </script>
    <script src="{{ asset('dashboard/custom/js/activate-account.js') }}"></script>

    <script>
        $('#kt_ecommerce_add_product_form').validate({
            rules: {

                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                "#phone": {
                    required: true
                },
                role_id: {
                    required: true,
                    digits: true
                },


            }
        })
    </script>
@endsection