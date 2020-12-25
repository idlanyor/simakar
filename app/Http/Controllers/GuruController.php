<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Setting;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $no   = 0;
        $guru = Guru::all();
        return view('induk.guru.index',compact('no','guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jenis = Setting::all();
        return view('induk.guru.create',compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_lengkap'      =>'required',
            'tempat_lahir'      =>'required',
            'tanggal_lahir'     =>'required|date',
            'jenis_kelamin'     =>'required',
            'id_gtk'            =>'required',
            'tmt_pengangkatan'  =>'date',
            'email'             =>'unique:guru'
        ]);
        $guru = Guru::create([
        'nama_lengkap'     =>  $request->nama_lengkap,
        'nik'              =>  $request->nik,
        'tempat_lahir'     =>  $request->tempat_lahir,
        'tanggal_lahir'    =>  $request->tanggal_lahir,
        'jenis_kelamin'    =>  $request->jenis_kelamin,
        'alamat'           =>  $request->alamat,
        'id_gtk'           =>  $request->id_gtk,
        'lama_kerja'       =>  $request->lama_kerja,
        'sk_pengangkatan'  =>  $request->sk_pengangkatan,
        'tmt_pengangkatan' =>  $request->tmt_pengangkatan,
        'ijazah_terakhir'  =>  $request->ijazah_terakhir,
        'email'            =>  $request->email,
        'no_hp'            =>  $request->no_hp
        ]);
        $guru->save();
        toastr()->success('Data berhasil disimpan!');
        return redirect('admin/guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        $jenis = Setting::all();
        return view('induk.guru.edit',compact('guru','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $id)
    {
        $guru = Guru::find($id);
        $guru->nama_lengkap     =  $request->nama_lengkap;
        $guru->nuptk            =  $request->nuptk;
        $guru->nik              =  $request->nik;
        $guru->tempat_lahir     =  $request->tempat_lahir;
        $guru->tanggal_lahir    =  $request->tanggal_lahir;
        $guru->jenis_kelamin    =  $request->jenis_kelamin;
        $guru->alamat           =  $request->alamat;
        $guru->id_gtk           =  $request->id_gtk;
        $guru->lama_kerja       =  $request->lama_kerja;
        $guru->sk_pengangkatan  =  $request->sk_pengangkatan;
        $guru->tmt_pengangkatan =  $request->tmt_pengangkatan;
        $guru->ijazah_terakhir  =  $request->ijazah_terakhir;
        $guru->email            =  $request->email;
        $guru->no_hp            =  $request->no_hp;
        $guru->update();
        toastr()->success('Data berhasil update!');
        return redirect('admin/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        toastr()->success('Data berhasil dihapus');
        return redirect('/admin/guru');
    }
}
