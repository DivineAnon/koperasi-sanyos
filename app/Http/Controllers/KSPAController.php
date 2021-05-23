<?php

namespace App\Http\Controllers;

use App\KSPA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KSPAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kspas = DB::table('anggota')->get();
        return view('kspa', ['kspas' => $kspas]);
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
     * @param  \App\KSPA  $kSPA
     * @return \Illuminate\Http\Response
     */
    public function show(KSPA $kSPA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KSPA  $kSPA
     * @return \Illuminate\Http\Response
     */
    public function edit(KSPA $kSPA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KSPA  $kSPA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KSPA $kSPA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KSPA  $kSPA
     * @return \Illuminate\Http\Response
     */
    public function destroy(KSPA $kSPA)
    {
        //
    }
}
