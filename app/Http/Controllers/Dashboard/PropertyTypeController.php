<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\IPropertyTypeRepository;
use App\Requests\dashboard\CreateUpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\PropertyType;

use Illuminate\Support\Facades\Storage;

class PropertyTypeController extends Controller
{
    private $catRepository;

    public function __construct(IPropertyTypeRepository $catRepository){

        $this->catRepository = $catRepository;
       
    }


    public function index()
    {
        $categories = $this->catRepository->getAll();
        return view('dashboard.property_types.index' , compact('categories'));
    }

    public function create()
    {
        return view('dashboard.property_types.create');
    }

    public function store(CreateUpdateCategoryRequest $request)
    {
        $this->catRepository->create($request->all());
        return response()->json();
    }


    public function edit($id)
    {
        $category=PropertyType::find($id);
        return view('dashboard.property_types.edit' , compact('category'));
    }

    public function update(CreateUpdateCategoryRequest $request , $id)
    {
        $this->catRepository->update($request->validated() , $id);
        return response()->json();
    }


    public function destroy($id)
    {
        $this->catRepository->forceDelete($id);
        return response()->json();

    }

    
    public function deleteAll(Request $request) {
        $requestIds = json_decode($request->data);
    
        foreach ($requestIds as $id) {
          $ids[] = $id->id;
        }
        if ($this->catRepository->deleteForceWhereIn('id', $ids)) {
          return response()->json('success');
        } else {
          return response()->json('failed');
        }
    }

}