<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
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
        $data = Member::all();
        return view('members.index')// teruh blade disini
        ->with("data", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required',
            'jKelamin'=> 'required',
            'umur'=> 'required'
        ],
        [
            'nama.required'=>'nama Wajib Diisi!',
            'jKelamin.required'=>'nama Wajib Diisi!',
            'umur.required'=>'nama Wajib Diisi!'
        ]);
        Member::create([
            'nama' => $request->nama,
            'jKelamin' => $request->jKelamin,
            'umur' => $request->umur
        ]);
        return redirect('/')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
