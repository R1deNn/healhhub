<?php

namespace App\Http\Controllers;

use App\Models\Calls;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class CallMeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $research = new Calls();

        $research->name = $request->input('name');
        $research->phone = $request->input('tel');
        $research->description = $request->input('description');

        $research->save();

        return redirect('/');
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
    public function show(Calls $calls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calls $calls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function done(int $id)
    {
        $call = Calls::find($id);
    
        if ($call) {
            $callData['status'] = 2;

            Calls::where('id', $id)->update($callData);
            return back()->with('message', 'User updated');
        }
    }

    public function notdone(int $id)
    {
        $call = Calls::find($id);
    
        if ($call) {
            $callData['status'] = 1;

            Calls::where('id', $id)->update($callData);
            return back()->with('message', 'User updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calls $calls)
    {
        //
    }
}
