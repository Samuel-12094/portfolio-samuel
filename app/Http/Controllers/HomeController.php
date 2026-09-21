<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Experience;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::principaux()
            ->where('visible', true)
            ->orderBy('ordre')
            ->get();

        $explorations = Project::explorations()
            ->where('visible', true)
            ->orderBy('ordre')
            ->get();

        $competences = Competence::orderBy('categorie')
            ->orderBy('ordre')
            ->get()
            ->groupBy('categorie');

        $experiences = Experience::orderBy('ordre')->get();

        return view('home', compact('projects', 'explorations', 'competences', 'experiences'));
    }
}
