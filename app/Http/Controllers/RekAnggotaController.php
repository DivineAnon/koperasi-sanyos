<?php

namespace App\Http\Controllers;

use App\RekAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekening_anggota');
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
     * @param  \App\RekAnggota  $rekAnggota
     * @return \Illuminate\Http\Response
     */
    public function show(RekAnggota $rekAnggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekAnggota  $rekAnggota
     * @return \Illuminate\Http\Response
     */
    public function edit(RekAnggota $rekAnggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekAnggota  $rekAnggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekAnggota $rekAnggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekAnggota  $rekAnggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekAnggota $rekAnggota)
    {
        //
    }
}
