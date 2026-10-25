<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama portofolio.
     */
    public function index(): View
    {
        $featuredProjects = Project::with('category')
            ->where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        $experiences = Experience::orderBy('sort_order', 'asc')->get();

        return view('pages.home', [
            'featuredProjects' => $featuredProjects,
            'experiences' => $experiences,
        ]);
    }
}
