<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::all();
        $total = Pegawai::count();
        return view('datapegawai', compact('data', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Pegawai::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/pegawai')->with('success', 'Data Pegawai Berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pegawai::findOrFail($id);
        return view('tampilpegawai', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pegawai::findOrFail($id);
        if (request()->hasFile('foto') && request('foto') != '') {
            $imagePath = file_exists(storage_path('foto' . $data->foto));
            if (Pegawai::exists($imagePath))
            {
                Storage::delete($imagePath);
            }

            $foto = $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
            $data['foto'] = $foto;
        }
        $data->update($request->all());
        return redirect('/pegawai')->with('info', 'Data Pegawai Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::findOrFail($id);
        $data->delete();
        return redirect('/pegawai')->with('error', 'Data Pegawai telah dihapus!!!');
    }
}
