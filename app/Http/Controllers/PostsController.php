<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return "it's working yoo! " . $id . " " . "to the world";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "i'm the method that create stuff";
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
        return "this is the show method";
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

    public function contact()
    {

        $people = ['Menace','World', 'Rodney', 'Tadiwa', 'Frost'];
//        $people = [];

        return view('contact', compact('people'));
    }

    public function showpost($id, $name, $password)
    {
//        return view('post')->with('id', $id);
        return view('post', compact('id', 'name', 'password'));
    }
}
