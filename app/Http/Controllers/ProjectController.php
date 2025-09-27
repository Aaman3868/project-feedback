<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
  public function index()
    {
        $id =  Auth::id();
        $projects = Project::where('user_id',$id)->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    { 
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pdf' => 'required|mimes:pdf|max:2048'
        ]);

        $fileName = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('uploads'), $fileName);

        Project::create([
            'name' => $request->name,
            'pdf_path' => 'uploads/'.$fileName,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('projects.index')->with('success','Project uploaded successfully!');
    }

    public function show(Project $project)
    {
        $project->load('feedbacks.user');
        return view('projects.show', compact('project'));
    }
}
