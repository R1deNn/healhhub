<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MdResearchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('MdResearchs', [
            'Researches' => Appointment::with('user', 'category')
            ->where('id_doctor', Auth::user()->id)
            ->whereNotIn('result', [2, 4])
            ->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userData['result'] = 1;
        
        Appointment::where('id', $id)->update($userData);
      
        return back()->with('message', 'ok');
    }

    public function not(string $id)
    {
        $userData['result'] = 4;
        
        Appointment::where('id', $id)->update($userData);
      
        return back()->with('message', 'ok');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'file_upload' => 'required|image|mimes:jpeg,png,jpg,svg,pdf|max:2048',
        ]);
        
        $request->hasFile('file_upload');
        $image = $request->file('file_upload');
        $imageName = time().'.'.$image->extension();  
        $image->move(storage_path('download/images'), $imageName);
        $userData['attachment'] = "$imageName";
        $userData['description'] = $request->input('description');;
        $userData['result'] = 2;
        
        Appointment::where('id', $id)->update($userData);
      
        return back()->with('message', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
