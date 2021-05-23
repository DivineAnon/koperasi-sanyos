<?php

namespace App\Http\Controllers;

use App\SHU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SHUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shu = DB::table('anggota')->get();
        return view('shu', ['shus' => $shu]);
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
     * @param  \App\SHU  $sHU
     * @return \Illuminate\Http\Response
     */
    public function show(SHU $sHU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SHU  $sHU
     * @return \Illuminate\Http\Response
     */
    public function edit(SHU $sHU)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SHU  $sHU
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SHU $sHU)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SHU  $sHU
     * @return \Illuminate\Http\Response
     */
    public function destroy(SHU $sHU)
    {
        //
    }
}
