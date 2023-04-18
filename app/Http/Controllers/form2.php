<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class form2 extends Controller
{ 

    public function index()
    {
        //
        return view('form2');
    }
    public function create(Request $request)
    {
        //
        // dd("helloooo");
        // dd($request->all());
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

        $data = post::all();
        // dd($data);

        foreach($data as $key=>$value){
            $person[] = array(
                'title' =>$value->title,
                'name' => $value->name,
                'age' => $value->age,
                'description' => $value->description
            );

        }
        foreach($person as $key=>$val){
            $name[] = array(
                'name'=> $val->name,
            );
        }

        // $person = array(
        //     'name' => $data->name,
        //     'age' => $data->age,
        //     'description' => $data->description
        // );
    dd($name);
        return response()->json(['success' => 'Post created successfully form 2.']);
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
