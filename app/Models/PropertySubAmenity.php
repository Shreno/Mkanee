<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UploadTrait;
use Spatie\Translatable\HasTranslations;


class PropertySubAmenity extends Model
{
    use HasFactory , UploadTrait ;
    protected  $table="property_sub_amenity";

    protected $fillable = ['property_id' , 'sub_amenity_id' , 'number'];



    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function setIconAttribute($value)
    {
        if($value){
          return $this->attributes['icon'] = $this->StoreFile('amenities' , $value);
        }
    }

    public function getIconAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function subAmenities()
    {
        return $this->belongsTo(SubAmenity::class,'sub_amenity_id');
    }
}
