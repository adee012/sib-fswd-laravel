<?php

namespace App\Http\Controllers;

use App\Models\Carousels;
use App\Models\products;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CarouselsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousels::all();
        return view('carousels.carousels', compact('carousels'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'name' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('banner')) {
            $name = $request->file('banner');
            $fileName = 'carousels_' . time() . '.' . $name->getClientOriginalExtension();

            $path = Storage::putFileAs('public/carousels_banner', $request->file('banner'), $fileName);
        }

        $carousels = Carousels::create([
            'name' => $request->name,
            'banner' => $fileName,
            'created_by' => Auth::user()->id
        ]);

        return redirect('/carousels')->with('toast_success', 'Carousel added successfully!!');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $carousels = Carousels::find($id);
        $carousels = Carousels::where('id', $request->id)->first();
        // dd($carousels);

        if ($carousels->is_active == 1) {
            return back()->with('warning', 'Banner has been accepted!!');
        }

        $carousels->update([
            'is_active' => 1,
            'verified_by' => Auth::user()->id
        ]);

        return redirect('/carousels')->with('toast_success', 'Banner has been successfully accepted!!');
    }
    public function rejected(Request $request, $id)
    {
        // $carousels = Carousels::find($id);
        $carousels = Carousels::where('id', $request->id)->first();
        // dd($carousels);

        if ($carousels->is_active == 2) {
            return back()->with('warning', 'Banner has been rejected!!');
        }

        $carousels->update([
            'is_active' => 2,
            'verified_by' => Auth::user()->id
        ]);

        return redirect('/carousels')->with('toast_success', 'Banner has been successfully rejected!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carousels = carousels::where('id', $id)->first();

        // Menghapus file lama dari storage
        $delete = Storage::delete('public/carousels_banner/' . $carousels->banner);
        // Delete data dari database 
        $carousels->delete();

        return back()->with('toast_success', 'The carousel was successfully removed!!');
    }
}
