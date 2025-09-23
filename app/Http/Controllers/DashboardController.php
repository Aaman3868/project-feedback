<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
     public function index()
    {
        $projectsCount = Project::count();
        return view('dashboard', compact('projectsCount'));
    }
}
