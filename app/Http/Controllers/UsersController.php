<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
// use Illuminate\Http\Request::avatar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = users::all();

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('users.UsersList', compact('users'));
    }

    public function group()
    {
        $users = users::all();
        return view('users.UserGroup', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'name' => ['required', 'string'],
                'address' => 'required',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'email' => 'required|email|unique:users',
                'phone' => 'required|min:10|max:13',
            ],
            [
                'password.regex' => 'Minimum 6 characters, consisting of uppercase, lowercase, numbers and symbols',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('avatar')) {
            $name = $request->file('avatar');
            $fileName = 'user_' . time() . '.' . $name->getClientOriginalExtension();

            $path = Storage::putFileAs('public/avatar', $request->file('avatar'), $fileName);
        }

        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'avatar' => $fileName,
            'phone' => $request->phone,
            'addres' => $request->address,
            'password' =>  Hash::make($request->password)
        ]);

        return redirect('/UsersList')->with('toast_success', 'Data Berhasil Disimpan!');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('users.detailUser');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = users::where('id', $id)->first();
        return view('users.editUser', compact('users'));
        // dd($users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'avatar' => 'image|mimes:png,jpg,jpeg|max:2048',
                'name' => ['required', 'string'],
                'address' => 'required',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:10',
            ],
            [
                'password.regex' => 'Minimum 6 characters, consisting of uppercase, lowercase, numbers and symbols',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $users = users::where('id', $request->id)->first();
        // dd($users);

        if ($request->hasFile('avatar')) {

            // Menghapus file lama dari storage
            $delete = Storage::delete('public/avatar/' . $users->avatar);

            // upload file dengan nama file yang ditentukan
            $name = $request->file('avatar');
            $fileName = 'user_' . time() . '.' . $name->getClientOriginalExtension();
            $path = Storage::putFileAs('public/avatar', $request->file('avatar'), $fileName);

            // Update file di database
            $users->update([
                'avatar' => $fileName,
            ]);
        }

        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'addres' => $request->address,
            'password' =>  Hash::make($request->password)
        ]);
        // dd($request->all());

        return redirect('/UsersList')->with('toast_success', 'Data berhasil diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $users = users::where('id', $id)->first();

        // Menghapus file lama dari storage
        $delete = Storage::delete('public/avatar/' . $users->avatar);
        // Delete data dari database 
        $users->delete();

        return back()->with('toast_success', 'Data berhasil dihapus!!');
    }
}
