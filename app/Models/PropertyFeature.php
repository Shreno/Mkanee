<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UploadTrait;
use Spatie\Translatable\HasTranslations;
class PropertyFeature extends Model
{
    use HasFactory , UploadTrait , HasTranslations;
    public $translatable = ['name'];
    protected $guarded = [];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function setIconAttribute($value)
    {
        if($value){
          return $this->attributes['icon'] = $this->StoreFile('propertyfeatures' , $value);
        }
    }

    public function getIconAttribute($value)
    {
        return asset('storage/'.$value);
    }
    public function property()
    {
        return $this->belongsToMany(Property::class, 'property_property_feature');


    }

    public function feature()
    {
        return $this->belongsToMany(Property::class, 'property_property_feature');

    }
}
