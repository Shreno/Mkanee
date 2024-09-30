<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory , HasTranslations , UploadTrait;

    public $translatable = ['name' , 'desc'];

    protected $fillable = ['name' , 'image' , 'desc' , 'is_active'];
    

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function usercategories()
    {
        return $this->hasMany(UserCategory::class);
    }

    public function setImageAttribute($value)
    {
        if($value){
          return $this->attributes['image'] = $this->StoreFile('projects' , $value);
        }
    }

    public function getImageAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function property()
    {
        return $this->hasMany(property::class);
    }

}
