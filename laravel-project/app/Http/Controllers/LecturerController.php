<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Http\Requests\LecturerRequest;
use App\Http\Requests\LecturerUpdateRequest;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::paginate(10);
        $lecturers->withPath('/lecturer');

        $data['lecturers'] = $lecturers;

        return view('lecturer.index', $data);
        // dd($lecturer->is_active->getLabel());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LecturerRequest $request)
    {
        // Lecturer::create($request->all());
        // $validated = $request->validate([
        //     'nidn' => 'required|numeric|digits:10',
        //     'firstname' => 'required|max:30',
        //     'lastname' => 'required|max:30',
        //     'department_id' => 'required'
        // ]);

        Lecturer::create($request->validated());

        return redirect()->route('lecturer.index');
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
        $data['lecturer'] = Lecturer::find($id);
        return view('lecturer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LecturerUpdateRequest $request, string $id)
    {
        Lecturer::where('id', $id)
            ->update($request->validated());

        return redirect()->route('lecturer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lecturer::find($id)
            ->delete();

        return redirect()->back();
    }
}
