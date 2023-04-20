<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     * https://therealprogrammer.com/laravel-9-crud-using-ajax/
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
        $save = $post->save();

        $data = post::where('title','hi')->first();

        dd($data);
        return response()->json(['success' => 'Post created successfully.']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store method
        $post = new post();
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->description = $request->description;
        $post->save();

        return response()->json(['success' => 'Post created successfully.']);

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
      
        //update method
        $post = new post();
        $post->id = $id;
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->description = $request->description;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update method
        $post = new post();
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->description = $request->description;
        $post->save();

        return response()->json(['success' => 'Post updated successfully.']);

    }
    public function destroy(string $id)
    {
        //destroy method
        $post = new post();
        $post->id = $id;
        $post->delete();

        return response()->json(['success' => 'Post deleted successfully.']);

    }

        

    }

