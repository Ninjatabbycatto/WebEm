<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        

        $user = request()->user()->userInfo;


        $addButton = null;
        //$workplace = $user->workplaces()->inRandomOrder()->first();
        $teams = $user->teams()->get();
        //$users = $user->teams()->inRandomOrder()->first();
        //dd($user, $teams);
        return view('workplace.employees', [
            'user' => $user,
            'teams' => $teams,
            'disPuser' => $user,
            'addUser' => null,
            'addButton' => $addButton
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UserInfo $user)
    {
        //
        $data = $request->validate([
            'team_id' => ['required', 'integer', 'exists:teams,id']
        ]);

        $teamId = (int) $data['team_id'];
        $team = Teams::find($teamId);
        $team->users()->attach($user);


        $teams = $user->teams()->get();
        $user = request()->user()->userInfo;
        $addButton = 0;
        return view('workplace.employees', [
            'user' => $user,
            'teams' => $teams,
            'disPuser' => $user,
            'addUser' => null,
            'addButton' => $addButton
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = request()->user()->userInfo;

        $addButton = request()->query('addButton', null);
        
        //$workplace = $user->workplaces()->inRandomOrder()->first();
        $teams = $user->teams()->get();
        $dispuser = UserInfo::findOrFail($id);
        return view('workplace.employees', [
            'disPuser' => $dispuser,
            'user' => $user,
            'teams' => $teams,
            'addUser' => null,
            'addButton' => $addButton
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teams $teams)
    {
        //
    }

    public function add() {
        $user = request()->user()->userInfo;
        
        //$workplace = $user->workplaces()->inRandomOrder()->first();
        $teams = $user->teams()->get();
        $dispuser = null;
        $addUser = 1;
        return view('workplace.employees', [
            'disPuser' => $dispuser,
            'user' => $user,
            'teams' => $teams,
            'addUser' => $addUser
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teams $teams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teams $teams)
    {
        //
    }
}
