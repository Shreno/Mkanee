<?php

namespace App\Repositories\Eloquent;

use App\Models\PropertyType;
use App\Repositories\IPropertyTypeRepository;

class PropertyTypeRepository extends BaseRepository implements IPropertyTypeRepository
{
    public function __construct()
    {
        $this->model = new PropertyType();
    }
    
}