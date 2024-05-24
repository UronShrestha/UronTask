<?php

namespace App\Http\Controllers;
use App\Models\Organization;
use App\Models\Software;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function dashboard()
{
    $organizations = Organization::with('software')->get();

    
    return view('dashboard', compact('organizations',));
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $organizations = Organization::all();
            return view('organization/HomeOrganization', compact('organizations'));
           
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $software = Software::all();
        return view("Organization/addorganization",compact("software"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'orgdesc' => 'required|string',
            'software' => 'required|array', // Validate that software is an array
        ]);
        $organization = Organization::create($request->only('name','address','orgdesc'));
        $organization->software()->sync($request->software);
        return redirect()->route('organizations.index')->with('status', 'New Organization Added Succesfully.');
    
        
       
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
        $organization = Organization::findOrFail($id);
        $software = Software::all();
        $selectedSoftware = $organization->software->pluck('id')->toArray();
        return view('organization.update', compact('organization', 'software', 'selectedSoftware'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'orgdesc' => 'required|string',
            'software' => 'required|array', 
        ]);

        // Update organization
        $organization = Organization::findOrFail($id);
        $organization->update($request->only('name', 'address', 'orgdesc'));

        // Sync software
        $organization->software()->sync($request->software);

        return redirect()->route('organizations.index')->with('status', 'Organization Records Updated Succesfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $organization = Organization::findOrFail($id);
        $organization->software()->detach(); 
        $organization->delete();

        return redirect()->route('organizations.index')->with('status', 'Organization Records Has Been Deleted Successfully.');
    }
}
