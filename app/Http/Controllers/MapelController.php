<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\t_mapel;
use App\Http\Requests\MapelRequest;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapell = t_mapel::all();
        return view('data3/index',compact('mapell'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data3/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapelRequest $request)
    {
        t_mapel::create($request->all());
        return redirect()->route('data3/index')->with('message','data berhasil di simpan');
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
        $mapell = t_mapel::findOrFail($id);
        return view('data3.edit',compact('mapell'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapelRequest $request, $id)
    {
        $mapell = t_mapel::findOrFail($id);
        $mapell->update($request->all());
        return redirect()->route('data3/index')->with('message','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapell = t_mapel::findOrFail($id);
        $mapell->delete();
        return redirect()->route('data3/index')->with('message','data berhasil di hapus');
    }
}
