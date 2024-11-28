<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\School;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Education::all();
        return view('backoffice.pages.education.index', [
            'page_title' => 'Education',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backoffice.pages.education.create', [
            'page_title' => 'Education'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:1000',
        ]);
    
        Education::create($validatedData);
    
        return redirect()->route('admin.education.index')->with('success', 'Data berhasil ditambahkan.');
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
        $data = Education::find($id);
        return view('backoffice.pages.education.form', [
            'page_title' => 'Edit Education',
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formdata = [
            'name' => $request->name,
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description
        ];

        Education::whereId($id)->update($formdata);

        return redirect()->route('admin.education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $education = Education::findOrFail($id);
        $education->delete();
    
        return redirect()->route('admin.education.index')->with('success', 'Data berhasil dihapus.');
    }
}
