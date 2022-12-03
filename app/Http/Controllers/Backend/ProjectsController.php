<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectDetails;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projectdetails = ProjectDetails::get();
        $projects = Project::get();
        return view('backend.projects.index', compact('projectdetails', 'projects'));
    }


    public function show()
    {
        $projectdetails = ProjectDetails::get();
        $projects = Project::get();
        return view('backend.projects.show', compact('projectdetails', 'projects'));
    }

    public function store(Request $request)
    {
        $projectdetails = new ProjectDetails();
        $projectdetails->project_id = $request->project_id;
        // Note image
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/project_details_images'), $filename);
            $projectdetails['image'] = $filename;
            $projectdetails->save();
            return redirect()->route('projectds.show')->with('message', 'Project added successfully');
        }
    }



    public function edit($id)
    {
        $editData = ProjectDetails::find($id);
        $projects = Project::get();
        return view('backend.projects.edit', compact('editData', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $data = ProjectDetails::find($id);
        $data->project_id = $request->project_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/project_details_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/project_details_images'), $filename);
            $data['image'] = $filename;
            $data->save();
            return redirect()->route('projectds.show')->with('message', 'Project update successfully');
        }
    }

    public function delete($id)
    {
        $portfolies = ProjectDetails::find($id);
        if (file_exists('upload/project_details_images/' . $portfolies->image) and !empty($portfolies->image)) {
            unlink('upload/project_details_images/' . $portfolies->image);
        }
        $portfolies->delete();
        return redirect()->route('projectds.show')->with('message', 'Project deleted successfully');
    }
}
