<?php

namespace App\Http\Controllers;

use App\Models\Subject1;
use Illuminate\Http\Request;

class Subject1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject1::all();
        return view('subject1.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Subject1::create($request->all());

        return redirect()->route('subject1.index')
                         ->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject1 $subject1)
    {
        return view('subject1.show', compact('subject1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject1 $subject1)
    {
        return view('subject1.edit', compact('subject1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject1 $subject1)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $subject1->update($request->all());

        return redirect()->route('subject1.index')
                         ->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject1 $subject1)
    {
        $subject1->delete();

        return redirect()->route('subject1.index')
                         ->with('success', 'Subject deleted successfully.');
    }
}
