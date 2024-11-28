<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\School;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = School::all();

        if($request != null) {
            $data = School::where('name', 'like', '%' .$request->keyword . '%') ->get();
        }
        
        return view('backoffice.pages.school.index', [
            'page_title' => 'School',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.pages.school.create', [
            'page_title' => 'School'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255'
        ]);
    
        School::create($validatedData);
    
        return redirect()->route('admin.school.index')->with('success', 'Data berhasil ditambahkan.');    }

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
        $data = School::find($id);
        return view('backoffice.pages.school.form', [
            'page_title' => 'Edit School',
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formdata = [
            'name' => $request->name
        ];

        School::whereId($id)->update($formdata);

        return redirect()->route('admin.school.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus record dg memanfaat jAjax
        try {

            School::whereId($id)->delete();
            
            return response()->json([
                'success' => true,
                'meesage' => 'Delete success',
            ],200);
        } catch (\Throwable $th) {
            return response() -> json([
                'Success' => false,
                'message' => 'Error found :'. $th->getMessage(),

            ], 500);
        } catch (\Exception $th) {
            return response() -> json([
                'Success' => false,
                'message' => 'Error found :'. $th->getMessage(),

            ], 500);
        } 

    }

    //end coding
}
