<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     * https://therealprogrammer.com/laravel-9-crud-using-ajax/    check it
     */
    public function index()
    {
        //
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        // dd("helloooo");
        // // dd($request->all());
        $request->validate([
            'title'          => 'required',
            'name'         => 'required',
            'age'        => 'required',
            'description'   => 'required',
        ]);


        $post = new post();
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->description = $request->description;
        $post->save();
        return response()->json(['success' => 'Post created successfully.']);
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
