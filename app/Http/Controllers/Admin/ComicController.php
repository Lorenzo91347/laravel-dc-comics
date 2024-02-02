<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();



        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comics();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
       

        $comic->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comics)
    {
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comics)
    {
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        $data = $request->all();
        $comics ->update($data);

        return redirect()->route('comics.show',$comics -> id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

