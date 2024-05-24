<?php

namespace App\Http\Controllers;
use App\Models\Software;

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $software = Software::all();
        $pagedSoftware = Software::orderBy('id')->paginate(2);
        return view('software/HomeSoftware', compact('software','pagedSoftware'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("Software/addsoftware");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'softwaredesc' => 'required|string',
            
        ]);

        Software::create($request->all());

        return redirect()->route('software.index')->with('status', 'New Software Has Been Added Succesfully.');
                         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //return view('softwares.show', compact('software'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $software = Software::findOrFail($id);
        return view('software.update', compact('software'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'softwaredesc' => 'required|string',
        ]);

        $software = Software::findOrFail($id);
        $software->update($request->all());
        return redirect()->route('software.index')->with('status', 'Software Record Has Been Updated Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $software = Software::findOrFail($id);
        $software->delete();

        return redirect()->route('software.index')->with('status', 'Software Records Has Been Deleted!');
        
    }
}
