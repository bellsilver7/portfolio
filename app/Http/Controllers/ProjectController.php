<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => ['required'],
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);

        if ($request->has('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'skill_id' => $request->skill_id,
                'name' => $request->name,
                'project_url' => $request->project_url,
                'image' => $image,
            ]);

            return redirect()->route('projects.index');
        }

        return redirect()->back();
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'skill_id' => ['required'],
            'name' => ['required', 'min:3'],
        ]);

        $image = $project->image;
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }

        $project->update([
            'skill_id' => $request->skill_id,
            'name' => $request->name,
            'project_url' => $request->project_url,
            'image' => $image,
        ]);

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return redirect()->back();
    }
}
