<?php

namespace App\Repositories\Eloquent;

use App\Models\Propertytype;
use App\Repositories\IPropertytypeRepository;

class PropertytypeRepository extends BaseRepository implements IPropertytypeRepository
{
    public function __construct()
    {
        $this->model = new Category();
    }
    
}