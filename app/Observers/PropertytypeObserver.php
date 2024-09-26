<?php

namespace App\Observers;

use App\Models\Propertytype;
use Illuminate\Support\Facades\Storage;

class PropertytypeObserver
{
    public function created(Propertytype $row)
    {

            
    }

    public function updating (Propertytype $row)
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
     * @param \App\Propertytype $row
     * @return void
     */
    public function deleted(Propertytype $row)
    {
        if ($row->getRawOriginal('image') != 'default.png'){

            Storage::delete($row->getRawOriginal('image'));
        }
    }

}
