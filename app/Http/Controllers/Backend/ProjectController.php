<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function view()
    {
        $data['alldata'] = Project::all();
        return view('backend.project.project-view', $data);
    }

    public function add()
    {
        return view('backend.project.add-project');
    }

    public function store(Request $request)
    {
        $data = new Project();
        $data->name = $request->name;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/projects_images'), $filename);
            $data['image'] = $filename;
            $data->save();
            return redirect()->route('projects.view')->with('message', 'Project add successfully');
        }
    }
    public function edit($id)
    {
        $editData = Project::find($id);
        return view('backend.project.edit', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data = Project::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('projects.view')->with('message', 'Project update successfully');
    }

    public function delete($id)
    {
        $slider = Project::find($id);
        $slider->delete();
        return redirect()->route('projects.view')->with('message', 'Project deleted successfully');
    }
}
