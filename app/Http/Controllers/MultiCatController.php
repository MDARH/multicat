<?php

namespace App\Http\Controllers;

use App\Models\MultiCat;
use Illuminate\Http\Request;

class MultiCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MultiCat::where('parent', 0)->get();
        $all_cats = MultiCat::all();
        return view('welcome', compact('categories', 'all_cats'));
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
     * @param  \App\Models\MultiCat  $multiCat
     * @return \Illuminate\Http\Response
     */
    public function show(MultiCat $multiCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MultiCat  $multiCat
     * @return \Illuminate\Http\Response
     */
    public function edit(MultiCat $multiCat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MultiCat  $multiCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MultiCat $multiCat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MultiCat  $multiCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(MultiCat $multiCat)
    {
        //
    }
}
