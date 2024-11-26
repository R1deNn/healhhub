<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminResearchsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin-researchs',
            [
                'researchs' => Category::paginate(10),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $research = new Category();
        $research->title = $request->input('name');
        $research->description = $request->input('description');
        $research->price = $request->input('price');

        $research->save();
    
        return redirect()->route('adm-researchs')->with('success', 'Research created successfully');
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
        //
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
        $category = Category::find($id);
    
        if ($category) {
            $category->delete();
            return back()->with('message', 'Product deleted');
        } else {
            return back()->with('message', 'Product not found');
        }
    }
}
