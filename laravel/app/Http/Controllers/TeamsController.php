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
        $userid= 11;
        $user = UserInfo::find($userid);


        
        //$workplace = $user->workplaces()->inRandomOrder()->first();
        $teams = $user->teams()->inRandomOrder()->first();
        //$users = $user->teams()->inRandomOrder()->first();
        //dd($user, $teams);
        return view('workplace.employees', [
            'user' => $user,
            'teams' => $teams,
            'disPuser' => $user
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $userid= 11;
        $user = UserInfo::find($userid);


        
        //$workplace = $user->workplaces()->inRandomOrder()->first();
        $teams = $user->teams()->inRandomOrder()->first();
        $dispuser = UserInfo::findOrFail($id);
        return view('workplace.employees', [
            'disPuser' => $dispuser,
            'user' => $user,
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teams $teams)
    {
        //
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
