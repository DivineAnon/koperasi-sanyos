<?php

namespace App\Http\Controllers;

use App\LKSB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LKSBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lksb = DB::table('anggota')->get();
        return view('lksb', ['kspas' => $lksb]);
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
     * @param  \App\LKSB  $lKSB
     * @return \Illuminate\Http\Response
     */
    public function show(LKSB $lKSB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LKSB  $lKSB
     * @return \Illuminate\Http\Response
     */
    public function edit(LKSB $lKSB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LKSB  $lKSB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LKSB $lKSB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LKSB  $lKSB
     * @return \Illuminate\Http\Response
     */
    public function destroy(LKSB $lKSB)
    {
        //
    }
}
