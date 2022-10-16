<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Http\Requests\StorejawabanRequest;
use App\Http\Requests\UpdatejawabanRequest;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorejawabanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejawabanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejawabanRequest  $request
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejawabanRequest $request, jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(jawaban $jawaban)
    {
        //
    }
}
