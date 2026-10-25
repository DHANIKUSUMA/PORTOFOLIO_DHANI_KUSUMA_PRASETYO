<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Tampilkan seluruh daftar proyek dengan filter kategori.
     */
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('category');

        $categories = Category::withCount('projects')->get();

        $projectsQuery = Project::with('category')->orderBy('sort_order', 'asc');

        if ($selectedCategory && $selectedCategory !== 'all') {
            $projectsQuery->whereHas('category', function ($q) use ($selectedCategory) {
                $q->where('slug', $selectedCategory);
            });
        }

        $projects = $projectsQuery->get();

        return view('pages.projects.index', [
            'projects' => $projects,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory ?: 'all',
        ]);
    }

    /**
     * Tampilkan detail proyek (Case Study).
     */
    public function show(Project $project): View
    {
        $project->load(['category', 'images']);

        // Proyek navigasi lainnya
        $otherProjects = Project::where('id', '!=', $project->id)
            ->orderBy('sort_order', 'asc')
            ->take(3)
            ->get();

        return view('pages.projects.show', [
            'project' => $project,
            'otherProjects' => $otherProjects,
        ]);
    }
}
