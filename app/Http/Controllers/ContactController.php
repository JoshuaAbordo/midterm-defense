<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = contact::orderBy('created_at', 'DESC')->get();
  
        return view('contact.index', compact('contact'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        contact::create($request->all());
 
        return redirect()->route('contact.index')->with('success', 'contact added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = contact::findOrFail($id);
  
        return view('contact.show', compact('contact'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = contact::findOrFail($id);
  
        return view('contact.edit', compact('contact'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = contact::findOrFail($id);
  
        $contact->update($request->all());
  
        return redirect()->route('contact.index')->with('success', 'contact updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = contact::findOrFail($id);
  
        $contact->delete();
  
        return redirect()->route('contact.index')->with('success', 'contact deleted successfully');
    }
}
