<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Requests\dashboard\CreateUpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Status;

use Illuminate\Support\Facades\Storage;

class StatusController extends Controller
{

  

    public function index()
    {
        $statuses = Status::all();
        return view('dashboard.statuses.index' , compact('statuses'));
    }

    public function create()
    {
        return view('dashboard.statuses.create');
    }

    public function store(request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191|unique:statuses,name',
            
        ]);


        Status::create($data);
        return response()->json();
    }


    public function edit($id)
    {
        $status=Status::find($id);
        return view('dashboard.statuses.create' , compact('status'));
    }

    public function update(request $request , $id)
    {
        $attachment = Status::findOrFail($id);
        $data = $request->validate([
            'name' => 'unique:statuses,name,' . $id . ',id',
        ]);

        $attachment->update($data);
        return response()->json();
    }


    public function destroy($id)
    {
        $attachment = Status::findOrFail($id);
        $attachment->delete();
        return response()->json();

    }

    
    public function deleteAll(Request $request) {
        $requestIds = json_decode($request->data);
    
        foreach ($requestIds as $id) {
          $ids[] = $id->id;
        }
        if (PrimaryAmenity::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
          return response()->json('failed');
        }
    }

}