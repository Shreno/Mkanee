@extends('dashboard.layouts.app')
@section('pageTitle', isset($property) ? __('dashboard.edit_property') : __('dashboard.create_property'))

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar"></div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <h2>{{ isset($property) ? __('dashboard.edit_property') : __('dashboard.create_property') }}</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ isset($property) ? route('properties.update', $property->id) : route('properties.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($property))
                                @method('PUT')
                            @endif
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (AR)</label>
                                <input type="text" name="title[ar]" value="{{ old('title.ar', isset($property) ? $property->getTranslation('title', 'ar') : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (EN)</label>
                                <input type="text" name="title[en]" value="{{ old('title.en', isset($property) ? $property->getTranslation('title', 'en') : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (FA)</label>
                                <input type="text" name="title[fa]" value="{{ old('title.fa', isset($property) ? $property->getTranslation('title', 'fa') : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف (AR)</label>
                                <textarea name="description[ar]" class="form-control mb-2">{{ old('description.ar', isset($property) ? $property->getTranslation('description', 'ar') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف (EN)</label>
                                <textarea name="description[en]" class="form-control mb-2">{{ old('description.en', isset($property) ? $property->getTranslation('description', 'en') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الوصف (FA)</label>
                                <textarea name="description[fa]" class="form-control mb-2">{{ old('description.fa', isset($property) ? $property->getTranslation('description', 'fa') : '') }}</textarea>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الخريطة</label>
                                <input type="text" name="map" value="{{ old('map', isset($property) ? $property->map : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (AR)</label>
                                <input type="text" name="address[ar]" value="{{ old('address.ar', isset($property) ? $property->getTranslation('address','ar') : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (EN)</label>
                                <input type="text" name="address[en]" value="{{ old('address.en', isset($property) ? $property->getTranslation('address','en') : '') }}" class="form-control mb-2" />
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">العنوان (FA)</label>
                                <input type="text" name="address[fa]" value="{{ old('address.fa', isset($property) ? $property->getTranslation('address','fa') : '') }}" class="form-control mb-2" />
                            </div>
                          
                            <div class="mb-10 fv-row">
                                <label class="form-label">المدينة</label>
                                <select name="city_id" id="city_id" class="form-select mb-2">
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" {{ isset($property) && $property->city_id == $city->id ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-10 fv-row">
                                <label class="form-label">الحي</label>
                                <select name="neighborhood_id" id="neighborhood_id" class="form-select mb-2">
                                    @foreach($neighborhoods as $neighborhood)
                                        <option value="{{ $neighborhood->id }}" {{ isset($property) && $property->neighborhood_id == $neighborhood->id ? 'selected' : '' }}>
                                            {{ $neighborhood->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">الاتجاه</label>
                                <select name="direction" class="form-select mb-2">
                                    <option value="north" {{ old('direction', isset($property) && $property->direction == 'north' ? 'selected' : '') }}>شمال</option>
                                    <option value="south" {{ old('direction', isset($property) && $property->direction == 'south' ? 'selected' : '') }}>جنوب</option>
                                    <option value="east" {{ old('direction', isset($property) && $property->direction == 'east' ? 'selected' : '') }}>شرق</option>
                                    <option value="west" {{ old('direction', isset($property) && $property->direction == 'west' ? 'selected' : '') }}>غرب</option>
                                </select>
                            </div>
                           
                            <div class="mb-10 fv-row">
                                <label class="form-label">المشروع</label>
                                <select name="project_id" id="" class="form-select mb-2">
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}" {{ isset($property) && $property->project_id == $project->id ? 'selected' : '' }}>
                                            {{ $project->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-10 fv-row">
                                <label class="form-label">نوع العقار</label>
                                <select name="property_type_id" id="" class="form-select mb-2">
                                    @foreach($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}" {{ isset($property) && $property->property_type_id == $propertyType->id ? 'selected' : '' }}>
                                            {{ $propertyType->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="mb-10 fv-row">
    <label class="form-label">المرافق الأساسية</label>
    <select name="primary_amenities[]" multiple id="primary_amenities" class="form-select mb-2">
        @foreach($primaryAmenities as $primaryAmenity)
            <option value="{{ $primaryAmenity->id }}" 
                {{ isset($property) && $property->primaryAmenities->contains($primaryAmenity->id) ? 'selected' : '' }}>
                {{ $primaryAmenity->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-10 fv-row">
    <label class="form-label">المرافق الفرعية</label>
    <div id="sub_amenities_container">
        @foreach($primaryAmenities as $primaryAmenity)
            <div class="sub-amenities" id="sub_amenities_{{ $primaryAmenity->id }}" style="display: none;">
                <label class="form-label">{{ $primaryAmenity->name }} - المرافق الفرعية</label>
                <select name="sub_amenities_{{ $primaryAmenity->id }}[]" multiple class="form-select mb-2 sub-amenity-select" data-primary-id="{{ $primaryAmenity->id }}">
                    @foreach($primaryAmenity->subAmenities as $subAmenity)
                        <option value="{{ $subAmenity->id }}" 
                            {{ isset($property) && $property->subAmenities->contains($subAmenity->id) ? 'selected' : '' }}>
                            {{ $subAmenity->name }}
                        </option>
                    @endforeach
                </select>

                <!-- حقول العدد الخاصة بالمرافق الفرعية -->
                @foreach($primaryAmenity->subAmenities as $subAmenity)
                <?php  if(isset($property))
                {
                    $number=$property->Property_Sub_Amenity->where('sub_amenity_id',$subAmenity->id)->first();
                }?>
                    <div class="sub-amenity-quantity" id="quantity_{{ $subAmenity->id }}" style="display: none;">
                        <label>العدد لـ {{ $subAmenity->name }}</label>
                        <input type="number" name="sub_amenity_quantity[{{ $subAmenity->id }}]" 
                            class="form-control mb-2" 
                            placeholder="العدد لـ {{ $subAmenity->name }}" 
                            value="{{ isset($number) ? $number->number ?? 0 : 0 }}">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
                           <!--  -->

                          

                           
                            <div class="mb-10 fv-row">
                                <label class="form-label"> ميزات العقار داخلية</label>
                                <select name="property_features[]" id="property_features" multiple class="form-select mb-2" multiple >
                                    @foreach($propertyFeatures as $propertyFeature)
                                    @if($propertyFeature->type=='internal')
                                        <option value="{{ $propertyFeature->id }}" {{ isset($property) && $property->propertyFeatures->contains($propertyFeature->id) ? 'selected' : '' }}>
                                            {{ $propertyFeature->name }}
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label"> ميزات العقار الخارجية</label>
                                <select name="property_features[]" id="property_features_ex"  class="form-select mb-2" multiple >
                                    @foreach($propertyFeatures as $propertyFeature)
                                    @if($propertyFeature->type=='external')

                                        <option value="{{ $propertyFeature->id }}" {{ isset($property) && $property->propertyFeatures->contains($propertyFeature->id) ? 'selected' : '' }}>
                                            {{ $propertyFeature->name }}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            {{--  --}}
                          
                         
                            <div class="mb-5 fv-row">
                                <label class="form-label">المساحة بالقدم المربع</label>
                                <input type="number"  value="{{ old('area', isset($property) ? $property->area : '') }}" name="area" class="form-control mb-2">
                                
                            </div>
                            <div class="mb-5 fv-row">
                                <label class="form-label">سعر البيع</label>
                                <input type="number" value="{{ old('rate_per_day', isset($property) ? $property->rate_per_day : '') }}" name="rate_per_day" class="form-control mb-2">
                                
                            </div>




                            {{--  --}}
                            <div class="mb-10 fv-row">
                                <label class="form-label">الصور</label>
                                <input type="file" name="images[]" class="form-control mb-2" multiple />
                                @if(isset($property) && $property->images)
                                    <div class="mt-2">
                                        @foreach($property->images as $image)
                                            <img src="{{ asset($image->image) }}" alt="Property Image" width="100" 
                                            style="width: 100px;height: 100px;border: 1px solid #eee;border-radius: 10px;"/>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('dashboard.save_changes') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    $("#neighborhood_id").select2();
    $("#city_id").select2();
    $("#user_id").select2();
    $("#primary_amenities").select2();
    $("#sub_amenities").select2();
    $("#property_features").select2();
    $("#property_features_ex").select2();



</script>
<script>
  $(document).ready(function() {
    // عندما يتم تغيير المرافق الأساسية
    $('#primary_amenities').on('change', function() {
        var selectedAmenities = $(this).val(); // جلب المرافق الأساسية المختارة

        // إخفاء جميع المرافق الفرعية أولاً
        $('.sub-amenities').hide();

        // إظهار المرافق الفرعية الخاصة بالمرافق الأساسية المختارة
        if (selectedAmenities) {
            selectedAmenities.forEach(function(amenityId) {
                $('#sub_amenities_' + amenityId).show();
            });
        }
    });

    // عندما يتم تغيير المرافق الفرعية
    $('.sub-amenity-select').on('change', function() {
        var primaryId = $(this).data('primary-id');
        var selectedSubAmenities = $(this).val(); // جلب المرافق الفرعية المختارة

        // إخفاء جميع حقول العدد للمرافق الفرعية المرتبطة بهذا المرفق الأساسي
        $('#sub_amenities_' + primaryId + ' .sub-amenity-quantity').hide();

        // إظهار حقول العدد للمرافق الفرعية المختارة
        if (selectedSubAmenities) {
            selectedSubAmenities.forEach(function(subAmenityId) {
                $('#quantity_' + subAmenityId).show();
            });
        }
    });

    // عرض المرافق الفرعية وحقول العدد المختارة مسبقًا عند تحميل الصفحة
    $('#primary_amenities').trigger('change');
    $('.sub-amenity-select').trigger('change');
});
</script>

@endpush