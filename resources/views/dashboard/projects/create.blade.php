@extends('dashboard.layouts.app')
@section('pageTitle' , isset($project) ? __('dashboard.edit_title', ['page_title' => __('dashboard.projects')]) : __('dashboard.create_title', ['page_title' => __('dashboard.projects')]))

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
                <form id="kt_ecommerce_add_product_form" action="{{ isset($project) ? route('projects.update', $project->id) : route('projects.store') }}" method="POST"
                    class="form d-flex flex-column flex-lg-row store" data-kt-redirect="{{route('projects.index')}}" enctype='multipart/form-data'>

                    @csrf
                    @if(isset($project))
                        @method('PUT')
                    @endif
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>@lang('dashboard.image')</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3"
                                    data-kt-image-input="true"
                                    style="background-image: url({{ isset($project) && $project->image ? asset($project->image) : asset('dashboard/assets/media/svg/files/blank-image.svg') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="@lang('dashboard.choose_image')">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->


                      

                    </div>
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
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_project_ar" role="tabpanel">
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
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.name')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[ar]" value="{{ old('name.ar', isset($project) ? $project->getTranslations('name')['ar'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.projects')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">@lang('dashboard.name_en')</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[en]" value="{{ old('name.en', isset($project) ? $project->getTranslations('name')['en'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name_en')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.projects')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                             <!--end::Input group-->
                                             <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">الأسم بالفارسية</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name[fa]" value="{{ old('name.fa', isset($project) ? $project->getTranslations('name')['fa'] : '') }}"
                                                    class="form-control mb-2" placeholder="@lang('dashboard.name_fa')"
                                                    />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">@lang('dashboard.name_desc' , ['page_title' => __('dashboard.projects')])</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف بالعربية</label>
                                <textarea name="desc[ar]" class="form-control mb-2">{{ old('desc.ar', isset($project) ? $project->getTranslation('desc', 'ar') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف بالانجليزية</label>
                                <textarea name="desc[en]" class="form-control mb-2">{{ old('desc.en', isset($project) ? $project->getTranslation('desc', 'en') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف بالفارسية</label>
                                <textarea name="desc[fa]" class="form-control mb-2">{{ old('desc.fa', isset($project) ? $project->getTranslation('desc', 'fa') : '') }}</textarea>
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
                            <a href="{{ route('projects.index') }}" id="kt_ecommerce_add_product_cancel"
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
