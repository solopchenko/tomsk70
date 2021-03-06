<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PageController extends Controller
{
    //Главная страница
    public function index()
    {
        $projects = Project::moderated()->latest('published_at')->limit(6)->get();
        return view('pages.index', compact('projects'));
    }

    //О нас
    public function about()
    {
        return view('pages.about');
    }
}
