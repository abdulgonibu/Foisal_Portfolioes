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
}
