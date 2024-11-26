<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class AdminSpecialitysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin-specialitys',
            [
                'specialitys' => Speciality::paginate(10),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $research = new Speciality();
        $research->title = $request->input('name');

        $research->save();
    
        return redirect()->route('adm-specialitys')->with('success', 'Research created successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $speciality = Speciality::find($id);
    
        if ($speciality) {
            $speciality->delete();
            return back()->with('message', 'Product deleted');
        } else {
            return back()->with('message', 'Product not found');
        }
    }
}
