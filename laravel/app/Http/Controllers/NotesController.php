<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = UserInfo::find(11);
        $notes = $user->notes()->get();
        $notePrev = $user->notes()->get()->find(1);

        return view('Workplace.Notes', compact('user', 'notes', 'notePrev'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $user = UserInfo::find(11);
        $notes = $user->notes()->get();
        $notePrev = $user->notes()->get()->find(1);
        $newNote = 1;
        return view('Workplace.Notes', compact('user', 'notes', 'notePrev', 'newNote'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UserInfo $user)
    {
        $data = $request->validate([
            'content' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);

        $data['user_id'] = $user->id;
        $note = Notes::create($data);
    }


    /**
     * Display the specified resource.
     */
    public function show(Notes $notePrev)
    {
        $user = UserInfo::find(11);
        $notes = $user->notes()->get();
        $newNote = 0;
        return view('Workplace.Notes', compact('user', 'notes', 'notePrev', 'newNote'));
    
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notes $notes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notes $notes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $notes)
    {
        //
    }
}
