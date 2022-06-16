<?php

namespace App\Http\Controllers;

use App\Models\members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = members::all();
        return view('dashboard.anggota.anggota', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anggota.inputAnggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members = new members();
        $members->name = $request->nama;
        $members->placeOfbirth = $request->tempatlahir;
        $members->dateOfBirth = $request->tanggallahir;
        $members->address = $request->alamat;
        $members->gender = $request->jeniskelamin;
        $members->phone = $request->telepon;
        $members->save();

        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(members $members)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = members::find($id);
        return view("dashboard.anggota.editAnggota", ['members' => $members]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $members = members::find($id);
        $members->name = $request->nama;
        $members->placeOfbirth = $request->tempatlahir;
        $members->dateOfBirth = $request->tanggallahir;
        $members->address = $request->alamat;
        $members->gender = $request->jeniskelamin;
        $members->phone = $request->telepon;
        $members->update();

        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = members::find($id);
        $members->delete();

        return redirect('/anggota');
    }
}
