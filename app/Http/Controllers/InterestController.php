<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interests = Interest::all();

        return view('interests.index', compact('interests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Interest::create($request->all());

        return redirect()->route('interests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $interest = Interest::findOrFail($id);

        return view('interests.edit', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $interest = Interest::findOrFail($id);

        $interest->update($request->all());

        return redirect()->route('interests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $interest = Interest::findOrFail($id);

        $interest->delete();

        return redirect()->route('interests.index');
    }
}