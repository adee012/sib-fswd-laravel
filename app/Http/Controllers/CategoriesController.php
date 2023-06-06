<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = categories::all();

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('categories.categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        categories::create(
            [
                'name' => $request->name
            ]
        );
        return redirect('/categories')->with('toast_success', 'Category Berhasil Ditambahkan!!');
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
    public function edit($id)
    {
        $categories = categories::where('id', $id)->first();
        // dd($categories);
        return view('categories.categories', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $categories = categories::find($request->id)->update([
            'name' => $request->name
        ]);
        return redirect('/categories')->with('toast_success', 'Category Berhasil Diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = categories::where('id', $id)->first();

        // Delete data dari database 
        $categories->delete();

        return redirect('/categories')->with('toast_success', 'Category Berhasil Dihapus!!');
    }
}
