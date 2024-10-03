@extends('dashboard.layouts.app')
@section('pageTitle' , isset($testimonial) ? __('dashboard.edit_title', ['page_title' => __('dashboard.testimonials')]) : __('dashboard.create_title', ['page_title' => __('dashboard.testimonials')]))

@section('content')


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" action="{{ isset($testimonial) ? route('testimonials.update', $testimonial->id) : route('testimonials.store') }}" method="POST"
                    class="form d-flex flex-column flex-lg-row store" data-kt-redirect="{{route('testimonials.index')}}" enctype='multipart/form-data'>

                    @csrf
                    @if(isset($testimonial))
                        @method('PUT')
                    @endif
                    <!--begin::Aside column-->
                  
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                            <!--begin:::Tab item-->
                            
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane AR-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_testimonial_ar" role="tabpanel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2></h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="row">
                                            <div class="mb-4 col-md-4 ">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.name')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[ar]" value="{{ old('name.ar', isset($testimonial) ? $testimonial->getTranslations('name')['ar'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="mb-4 col-md-4  ">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.name_en')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[en]" value="{{ old('name.en', isset($testimonial) ? $testimonial->getTranslations('name')['en'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name_en')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                             <!--end::Input group-->
                                             <div class="mb-4 col-md-4 ">
                                                <!--begin::Label-->
                                                <label class="required form-label">الأسم بالفارسية</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[fa]" value="{{ old('name.fa', isset($testimonial) ? $testimonial->getTranslations('name')['fa'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name_fa')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            </div>
                                            <!--end::Input group-->
                                            <br>
                                             <!--begin::Input group-->
                                             <div class="row">
                                            <div class="mb-4 col-md-4 ">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.job_title')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="job_title[ar]" value="{{ old('job_title.ar', isset($testimonial) ? $testimonial->getTranslations('job_title')['ar'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.job_title')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.job_title' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="mb-4 col-md-4  ">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.job_title')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="job_title[en]" value="{{ old('job_title.en', isset($testimonial) ? $testimonial->getTranslations('job_title')['en'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.job_title')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.job_title' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                             <!--end::Input group-->
                                             <div class="mb-4 col-md-4 ">
                                                <!--begin::Label-->
                                                <label class="required form-label">الأسم بالفارسية</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="job_title[fa]" value="{{ old('job_title.fa', isset($testimonial) ? $testimonial->getTranslations('job_title')['fa'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.job_title')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.job_title' , ['page_title' => __('dashboard.testimonials')])</div>
                                                <!--end::Description-->
                                            </div>
                                            </div>
                                            <!--end::Input group-->
                                            <div class="mb-10 fv-row">
                                <label class="required form-label">الوصف بالعربية</label>
                                <textarea name="desc[ar]" class="form-control mb-2">{{ old('desc.ar', isset($testimonial) ? $testimonial->getTranslation('desc', 'ar') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">الوصف بالانجليزية</label>
                                <textarea name="desc[en]" class="form-control mb-2">{{ old('desc.en', isset($testimonial) ? $testimonial->getTranslation('desc', 'en') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">الوصف بالفارسية</label>
                                <textarea name="desc[fa]" class="form-control mb-2">{{ old('desc.fa', isset($testimonial) ? $testimonial->getTranslation('desc', 'fa') : '') }}</textarea>
                            </div>
                                            
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->
                                </div>
                            </div>
                            <!--end::Tab pane AR-->
                           
                        </div>

                        
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('testimonials.index') }}" id="kt_ecommerce_add_product_cancel"
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
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@section('scripts')
@endsection

@endsection
