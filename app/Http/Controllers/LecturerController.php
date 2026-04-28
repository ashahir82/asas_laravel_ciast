<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lecturers = Lecturer::all();
        return view('frontend.lecturer.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('frontend.lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datapelajar = $request->validate([
            'name' => 'required',
            'no_ic' => 'required|numeric',
            'no_tel' => 'required|numeric',
            'email' => 'required',
            'bidang' => 'required',
        ]);

        $databaru = Lecturer::create($datapelajar);
        return redirect(route('lecturer.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lecturer = Lecturer::findOrFail($id);
        return view('frontend.lecturer.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pelajar = Lecturer::find($id);
        $input = $request->all();
        $pelajar->update($input);
        return redirect(route('lecturer.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lecturer::destroy($id);
        return redirect(route('lecturer.index'));
    }
}
