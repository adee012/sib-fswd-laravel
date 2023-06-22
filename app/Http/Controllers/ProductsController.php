<?php

namespace App\Http\Controllers;

// use App\Models\categories;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = categories::all();
        $products = products::with(['categories'])->get();
        return view('products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categories::all();
        return view('products.addProducts', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'name' => 'required|string',
                'category' => 'required',
                'price' => 'required',
                'deskripsi' => 'required',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

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
            'created_by' => Auth::user()->id
        ]);

        return redirect('/ProductList')->with('toast_success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = products::all();
        return view('products.editProducts', compact('products'));
    }

    public function validation()
    {
        $products = products::all();
        return view('products.validationProduct', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = products::with(['categories'])->get();
        $categories = categories::all();
        $products = products::where('id', $id)->first();
        return view('products.editProducts', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'image|mimes:png,jpg,jpeg|max:2048',
                'name' => 'required|string',
                'price' => 'required',
                'deskripsi' => 'required',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        $products = products::where('id', $request->id)->first();
        if ($request->hasFile('image')) {
            // menghapus foto lama di storage
            $delete = Storage::delete('public/image_product/' . $products->image);
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

        return redirect('/ProductList')->with('toast_success', 'The product has been successfully updated!');
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

        return back()->with('toast_success', 'The product was successfully deleted!!');
    }

    public function accepted(Request $request, $id)
    {

        $products = products::where('id', $request->id)->first();


        if ($products->status == 'accepted') {
            return back()->with('warning', 'product has been accepted!!');
        }

        $products->update([
            'status' => 'accepted',
            'verified_at' => now(),
            'verified_by' => Auth::user()->id
        ]);
        // dd($products);

        return redirect('/validation-product')->with('toast_success', 'product has been successfully accepted!!');
    }

    public function rejected(Request $request, $id)
    {
        $products = products::where('id', $request->id)->first();

        if ($products->status == 'rejected') {
            return back()->with('warning', 'product has been rejected!!');
        }

        $products->update([
            'status' => 'rejected',
            'verified_at' => now(),
            'verified_by' => Auth::user()->id
        ]);

        return redirect('/validation-product')->with('toast_success', 'product has been successfully rejected!!');
    }
}
