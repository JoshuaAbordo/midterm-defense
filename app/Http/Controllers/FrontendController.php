<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\education;
use App\Models\experience;
use App\Models\skill;
use App\Models\work;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        
        // $admin = User::where('role', 'admin')->get();

        $skill = skill::all();

        $education = education::all();

        $experience = experience::all();

        $contact = contact::all();

        $work = work::all();
        
        return view('welcome', ['skill' => $skill, 'education' => $education, 'experience' => $experience, 'contact' => $contact, 'work' => $work]);
    }
    
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
