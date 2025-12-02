<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HcmProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        return view('HcmProject.index');
    }
    public function about()
    {
        return view('HcmProject.about');
    }

    public function team()
    {
        return view('HcmProject.team');
    }

    public function careers()
    {
        return view('HcmProject.careers');
    }

    public function internship()
    {
        return view('HcmProject.internship');
    }

     public function newsroom()
    {
        return view('HcmProject.newsroom');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
