<?php

namespace App\Http\Controllers;

use App\Models\Workplaces;
use App\Models\UserInfo;
use App\Models\Teams;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Writer;

class WorkplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        //$user = UserInfo::find(11);
        //$user = UserInfo::query()
        //    ->where('user_auth', request()->user()->id)
        //    ->first();

        $user = request()->user()->userInfo;
        $members = $user->teams()->inRandomOrder()->first();
        return view('workplace.index', ['user'=> $user, 'members'=>$members], []);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = request()->user()->userInfo;
        $members = $user->teams()->inRandomOrder()->first();
        return view('workplace.workplace', ['user'=> $user], []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = $request->user()->userInfo;
        $workplaceData = $request->validate([
            'name' => ['required', 'string']
        ]);
        $workplaceData['manager'] = $user->id;
        $newWorkplace = Workplaces::create($workplaceData);
    
        // Validate and create the team with the created workplace_id
        $teamsData = $request->validate([
            'role' => ['required', 'string'],
            'desc' => ['required', 'string'],
        ]);
        $teamsData['workplace_id'] = $newWorkplace->id;
        $newTeam = $user->teams()->create($teamsData);

        $teams = $user->teams()->get();
        $workplaceDisp = $newWorkplace;
    
        return view('workplace.workplace', ['user'=> $user, 'teams' => $teams, 'workplaceDisp' => $workplaceDisp]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Workplaces $workplaces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workplaces $workplaces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workplaces $workplaces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workplaces $workplaces)
    {
        //
    }

    public function employees() {
        return view('workplace.employees');
    }
    
    public function workplace($id = null) {
        $user = request()->user()->userInfo;
        $members = $user->teams()->inRandomOrder()->first();
        $teams = $user->teams()->get();
        $workplaceDisp = Workplaces::find($id);


        return view('workplace.workplace', ['user'=> $user, 'teams' => $teams, 'workplaceDisp' => $workplaceDisp]);
    }
    public function calendar() {

        return view('workplace.calendar');
    }
    public function notes() {
        return view('workplace.notes');
    }
    public function bulletin() {
        return view('workplace.bulletin');
    }

}
