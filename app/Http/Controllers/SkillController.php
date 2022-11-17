<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SkillController extends Controller
{
    public function index()
    {
        return Inertia::render('Skills/Index');
    }

    public function create()
    {
        return Inertia::render('Skills/Create');
    }
}
