<?php

namespace App\Http\Controllers;

use App\Proffesor;
use Illuminate\Http\Request;
use App\Student;

class ProffesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proffessors = Proffesor::all();
        foreach($proffessors as $proffesor) {
            $proffesor->students = Student::where('course_id', $proffesor->course_id)->get();
        }
        return view('proffessors.index', compact('proffessors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proffesor  $proffesor
     * @return \Illuminate\Http\Response
     */
    public function show(Proffesor $proffesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proffesor  $proffesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proffesor $proffesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proffesor  $proffesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proffesor $proffesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proffesor  $proffesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proffesor $proffesor)
    {
        //
    }
}
