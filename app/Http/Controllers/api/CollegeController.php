<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;


class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return college::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
        //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $college = College::create([
            'college_name' =>$request ->college_name,
            'location'    =>$request ->location,
            'description'   =>$request ->description,
            'user_id'       =>$request ->user_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return College::findorfail($id);

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
        $college = College::findorfail($id);
 
        $college->delete();
        return $college;
    }
}
