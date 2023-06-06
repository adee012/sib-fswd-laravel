<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApiProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::get();

        return response()->json([
            'status' => 200,
            'message' => 'data diambil',
            'data' => $products
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
        if ($request->hasFile('image')) {
            $name = $request->file('image');
            $fileName = 'product_' . time() . '.' . $name->getClientOriginalExtension();

            $path = Storage::putFileAs('public/image_product', $request->file('image'), $fileName);
        }

        $products = products::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'description' => $request->deskripsi,
            'price' => $request->price,
            'image' => $fileName,
            'status' => 'waiting',
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Data product berhasil ditambahkan!!',
            'data' => $products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = products::all();

        return response()->json([
            'status' => 200,
            'message' => 'Data ditampilkan!!',
            'data' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = products::find($id);
        if ($request->hasFile('image')) {
            // upload
            $name = $request->file('image');
            $fileName = 'product_' . time() . '.' . $name->getClientOriginalExtension();
            $path = Storage::putFileAs('public/image_product', $request->file('image'), $fileName);

            $products->update([
                'image' => $fileName,
            ]);
        }
        $products->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'description' => $request->deskripsi,
            'price' => $request->price,
            'status' => 'accepted'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Data product berhasil diupdate!!',
            'data' => $products
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = products::where('id', $id)->first();

        // Menghapus file lama dari storage
        $delete = Storage::delete('public/image_product/' . $products->image);
        // Delete data dari database 
        $products->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data product berhasil dihapus!!',

        ]);
    }
}
