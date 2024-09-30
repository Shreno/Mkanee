<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\UploadTrait;


class Testimonial extends Model
{
    use HasFactory,HasTranslations,UploadTrait;
    public $translatable = ['name','job_title','desc'];

    protected $fillable = ['name', 'job_title', 'desc', 'image'];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    public function setImageAttribute($value)
    {
        if($value){
          return $this->attributes['image'] = $this->StoreFile('testimonials' , $value);
        }
    }

    public function getImageAttribute($value)
    {
        return asset('storage/'.$value);
    }

}
