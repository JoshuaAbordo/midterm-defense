<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;

class WorkController extends Controller
{
    public function index()
    {
        $work = work::orderBy('created_at', 'DESC')->get();
  
        return view('work.index', compact('work'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('work.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $work = new work();
        $work->type = $request->input('type');
        $work->title = $request->input('title');
        $work->link = $request->input('link');
        
        // Set default value for 'picture' attribute
        $work->picture = ''; // Or any other default value you prefer
    
        if ($request->hasFile('picture')) {
            $avatarPath = $request->file('picture')->store('picture', 'public');
            $work->picture = $avatarPath;
        }
    
        $work->save();
    
        return redirect()->route('work.index')->with('success', 'Work added successfully');
    }
    
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $work = work::findOrFail($id);
  
        return view('work.show', compact('work'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $work = work::findOrFail($id);
  
        return view('work.edit', compact('work'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $work = work::findOrFail($id);
  
        $work->update($request->all());
  
        return redirect()->route('work.index')->with('success', 'work updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $work = work::findOrFail($id);
  
        $work->delete();
  
        return redirect()->route('work.index')->with('success', 'work deleted successfully');
    }
}
