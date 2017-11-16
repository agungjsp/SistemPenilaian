<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\t_siswa;
use App\Http\Requests\SiswaRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaa = t_siswa::all();
        return view('data2/index',compact('siswaa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data2/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        t_siswa::create($request->all());
        return redirect()->route('data2/index')->with('message','data berhasil di simpan');
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
        $siswaa = t_siswa::findOrFail($id);
        return view('data2.edit',compact('siswaa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, $id)
    {
        $siswaa = t_siswa::findOrFail($id);
        $siswaa->update($request->all());
        return redirect()->route('data2/index')->with('message','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $siswaa = t_siswa::findOrFail($id);
      $siswaa->delete();
      return redirect()->route('data2/index')->with('message','data berhasil di hapus');
    }
}
