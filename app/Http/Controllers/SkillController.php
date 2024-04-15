<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = skill::orderBy('created_at', 'DESC')->get();
  
        return view('skill.index', compact('skills'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        skill::create($request->all());
 
        return redirect()->route('skill.index')->with('success', 'skill added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skills = skill::findOrFail($id);
  
        return view('skill.show', compact('skill'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = skill::findOrFail($id);
  
        return view('skill.edit', compact('skill'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = skill::findOrFail($id);
  
        $skills->update($request->all());
  
        return redirect()->route('skill.index')->with('success', 'skills updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = skill::findOrFail($id);
  
        $skills->delete();
  
        return redirect()->route('skill.index')->with('success', 'skills deleted successfully');
    }
}
