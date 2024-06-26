<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\experience;

class ExperienceController extends Controller
{
    public function index()
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        $experience = experience::orderBy('created_at', 'DESC')->get();
  
        return view('experience.index', compact('experience'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        return view('experience.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        experience::create($request->all());
 
        return redirect()->route('experience.index')->with('success', 'experience added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        $experience = experience::findOrFail($id);
  
        return view('experience.show', compact('experience'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        $experience = experience::findOrFail($id);
  
        return view('experience.edit', compact('experience'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        $experience = experience::findOrFail($id);
  
        $experience->update($request->all());
  
        return redirect()->route('experience.index')->with('success', 'experience updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(empty(Auth()->user()->role)){
            abort(404);
        }
        $experience = experience::findOrFail($id);
  
        $experience->delete();
  
        return redirect()->route('experience.index')->with('success', 'experience deleted successfully');
    }
}
