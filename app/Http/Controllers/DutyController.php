<?php

namespace App\Http\Controllers;

use App\Models\Duty;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Duty::all()
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /*
            $table->increments('id');
            $table->dateTime('duty_date',0);
            $table->string('description');
            $table->string('title');
            $table->string('place');
            $table->string('pullout_by');
            $table->string('type');

        */


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //

        $duty = new Duty;
        $duty->duty_date    = $req->duty_date;
        $duty->description  = $req->description;
        $duty->title        = $req->title;
        $duty->place        = $req->place;
        $duty->pullout_by   = $req->pullout_by;
        $duty->type         = $req->type;
        $duty->personnel_id = $req->personnel_id;
        
        $duty->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duty  $duty
     * @return \Illuminate\Http\Response
     */
    public function show(Duty $duty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duty  $duty
     * @return \Illuminate\Http\Response
     */
    public function edit(Duty $duty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duty  $duty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duty $duty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duty  $duty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duty $duty)
    {
        //
    }
}
