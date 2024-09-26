<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(100);
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name.ar' => 'required|string|max:191|unique:projects,name->ar',
            'name.en' => 'required|string|max:191|unique:projects,name->en',
            'name.fa' => 'required|string|max:191|unique:projects,name->fa',
            'desc.ar' => 'nullable|string',
            'desc.en' => 'nullable|string',
            'desc.fa' => 'nullable|string',
        

            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

       

        Project::create($data);

        return response()->json(['message' => 'تم إنشاء المشروع بنجاح']);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.create', compact('project'));
    }

    public function update(Request $request, $id)

    {
        $project = Project::findOrFail($id);
        
        // Validation
        $data = $request->validate([
            'name.ar' => ['required', Rule::unique('projects', 'name->ar')->ignore($id)],
            'name.en' => ['required', Rule::unique('projects', 'name->en')->ignore($id)],
            'name.fa' => ['required', Rule::unique('projects', 'name->fa')->ignore($id)],
            'desc.ar' => 'nullable|string|max:191',
            'desc.en' => 'nullable|string|max:191',
            'desc.fa' => 'nullable|string|max:191',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $project->update($data);
        return response()->json(['message' => 'تم التعديل بنجاح']);
    }

    public function destroy($id)
    {
        $neighborhood = Project::findOrFail($id);
        $neighborhood->delete();
        return response()->json();
    }

    public function deleteAll(Request $request)
    {
        $requestIds = json_decode($request->data);
        foreach ($requestIds as $id) {
            $ids[] = $id->id;
        }
        if (Project::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
            return response()->json('failed');
        }
    }
}
