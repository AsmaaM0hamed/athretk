<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\project;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $projects=project::all();
        $services= service::all();
        $news=post::all();

        return view("frontend.home",compact("services","projects","news"));
    }

    public function services()
    {
        $services= service::all();
        return view("frontend.services",compact("services"));
    }
    public function projects()
    {
        $projects=project::all();
        return view("frontend.projects",compact('projects'));
    }

    public function news()
    {
        $news=post::all();
        return view("frontend.news",compact("news"));
    }
}
