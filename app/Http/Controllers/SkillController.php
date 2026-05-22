<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        Skill::create($request->all());

        return redirect()->route('skills.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);

        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $skill->update($request->all());

        return redirect()->route('skills.index');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        $skill->delete();

        return redirect()->route('skills.index');
    }
}