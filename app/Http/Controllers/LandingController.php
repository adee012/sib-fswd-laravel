<?php

namespace App\Http\Controllers;

use App\Models\Carousels;
use App\Models\categories;
use App\Models\products;
use App\Models\users;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // 
        $Carousels = Carousels::where('is_active', '1')->get();
        $categories = categories::all();
        $produk = products::select('category_id')->groupby('category_id')->get();
        $products = products::with(['categories'])->get();
        $users = users::where('role', 'user')->get();

        // Hitung jumlah data
        $count_category = $categories->count();
        $count_product = $products->count();
        $count_user = $users->count();
        return view('index', compact('Carousels', 'products', 'categories', 'produk', 'count_category', 'count_product', 'count_user'));
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
        //
    }
}
