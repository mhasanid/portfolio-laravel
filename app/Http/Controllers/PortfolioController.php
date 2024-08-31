<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function home()
    {
        $personal_info = Storage::json('personal_info.json');
        $projects = Storage::json('projects.json');
        $testimonials = Storage::json('testimonials.json');
        return view('home', ['info' => $personal_info, 'projects'=>$projects, 'testimonials'=>$testimonials]);
    }

    public function projectDetails($id)
    {
        $data = Storage::json('projects.json');
        $project = $data[$id] ?? null;
        return view('project_details', ['project' => $project]);
    }
}