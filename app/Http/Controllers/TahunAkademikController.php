<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tahunakademik.index');
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
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAkademik $tahunAkademik)
    {
        //
    }
}
