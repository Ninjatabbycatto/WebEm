<?php

namespace App\Http\Controllers;

use App\Models\Workplaces;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class WorkplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $user = UserInfo::find(1);

        return view('workplace.index', ['user'=> $user],[]);

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
    
    public function workplace() {
        return view('workplace.workplace');
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
