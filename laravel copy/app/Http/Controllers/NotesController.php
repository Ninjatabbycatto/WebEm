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
        $user = request()->user()->userInfo;
        $notes = $user->notes()->get();
        $notePrev = $user->notes()->get()->find(1);
        $newNote = 0;
        return view('Workplace.Notes', compact('user', 'notes', 'notePrev', 'newNote'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $user = request()->user()->userInfo;
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
        $user = request()->user()->userInfo;
        $data['user_info_id'] = $user->id;
        $user->notes()->create($data);
        $notes = $user->notes()->get();
        $notePrev = $user->notes()->get()->find(1);
        $newNote = 0;
        return to_route('workplace.Notes.show', compact('user', 'notes', 'notePrev', 'newNote'))->with('message', 'Note ws created');
    }


    /**
     * Display the specified resource.
     */
    
    public function show(Notes $notePrev)
    {
        $user = request()->user()->userInfo;
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
    public function update(Request $request, Notes $note, $id = null)
    {
        //
        $data = $request->validate([
            'content' => ['required', 'string'],
        ]);

        $note = Notes::find($id);
        $note->update($data);
        $user = request()->user()->userInfo;
        $notes = $user->notes()->get();
        $notePrev = $note;
        $newNote = 0;
        return view('Workplace.Notes', compact('user', 'notes', 'notePrev', 'newNote'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id = null)
    {
        if (!$id) {
            return redirect()->back()->with('error', 'No note ID provided.');
        }
    
        $note = Notes::find($id);
    
        if (!$note) {
            return redirect()->back()->with('error', 'Note not found.');
        }
        //
        $note->delete();
        $user = UserInfo::find(11);
        $notes = $user->notes()->get();
        $notePrev = $user->notes()->get()->find(1);
        $newNote = 0;
        return view('Workplace.Notes', compact('user', 'notes', 'notePrev', 'newNote'));
    }
}
