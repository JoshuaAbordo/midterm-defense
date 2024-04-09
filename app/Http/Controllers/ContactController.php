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
        // return view('contact.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // contact::create($request->all());
        $contact = new contact();

        $contact->your_name = $request->input('your_name');
        $contact->your_email = $request->input('your_email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return  redirect('http://127.0.0.1:8000/');
 
        // return redirect()->route('contact.index')->with('success', 'education added successfully');
    }
  
    // /
    public function destroy(string $id)
    {
        $contact = contact::findOrFail($id);
  
        $contact->delete();
  
        return redirect()->route('contact.index')->with('success', 'contact deleted successfully');
    }
}
