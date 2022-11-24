<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SkillController extends Controller
{
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());

        return Inertia::render('Skills/Index', compact('skills'));
    }

    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);

        if (!$request->has('image')) {
            return redirect()->back();
        }

        $image = $request->file('image')->store('skills');

        Skill::create([
            'name' => $request->name,
            'image' => $image,
        ]);

        return redirect()->route('skills.index')->with('message', 'Skill created successfully!');
    }

    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        $image = $skill->image;
        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);

        return redirect()->route('skills.index')->with('message', 'Skill updated successfully!');;
    }

    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return redirect()->back()->with('message', 'Skill deleted successfully!');;
    }
}
