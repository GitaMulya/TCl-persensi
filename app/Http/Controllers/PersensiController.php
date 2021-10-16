<?php

namespace App\Http\Controllers;
use App\Models\Persensi;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PersensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Persensi::all();
        return view("persensi.index")// teruh blade disini
        ->with("data", $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     return view();// teruh blade disini
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = [
            'required' => 'kolom harus diisi',
        ];
        $validation = $request->validate([
            'id_event' => 'required',
            'id_member' => 'required',
            'onTime' => 'required'
        ], $message);

        DB::beginTransaction();
        Persensi::create($validation);
        $member = Member::find($request->id_member);
        $member->count =$member->count + 1;
        DB::commit();
        return redirect('/')->with('success', 'data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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
