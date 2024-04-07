<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\education;

class EducationController extends Controller
{
    public function index()
    {
        $education = education::orderBy('created_at', 'DESC')->get();
  
        return view('education.index', compact('education'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        education::create($request->all());
 
        return redirect()->route('education.index')->with('success', 'education added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $education = education::findOrFail($id);
  
        return view('education.show', compact('education'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $education = education::findOrFail($id);
  
        return view('education.edit', compact('education'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = education::findOrFail($id);
  
        $education->update($request->all());
  
        return redirect()->route('education.index')->with('success', 'education updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = education::findOrFail($id);
  
        $education->delete();
  
        return redirect()->route('education.index')->with('success', 'education deleted successfully');
    }
}
