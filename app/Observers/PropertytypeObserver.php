<?php

namespace App\Observers;

use App\Models\PropertyType;
use Illuminate\Support\Facades\Storage;

class PropertytypeObserver
{
    public function created(PropertyType $row)
    {

            
    }

    public function updating (PropertyType $row)
    {
        if (request()->has('image')) {
            if ($row->getRawOriginal('image') != 'default.png'){
                Storage::delete($row->getRawOriginal('image'));
            }
        }
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param \App\PropertyType $row
     * @return void
     */
    public function deleted(PropertyType $row)
    {
        if ($row->getRawOriginal('image') != 'default.png'){

            Storage::delete($row->getRawOriginal('image'));
        }
    }

}
