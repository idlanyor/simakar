<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Rombel;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RombelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $batas   = 10;
        $kelas   = Kelas::orderBy('id','asc')->paginate($batas);
        $jurusan = Jurusan::orderBy('id','asc')->paginate($batas);
        $rombel  = Rombel::orderBy('id','asc')->paginate($batas);
        return view('admin.rombel.index',compact('kelas','batas','jurusan','rombel'));
    }
    public function show()
    {
        return $this->addKelas();
    }
    public function create()
    {
        return $this->addRombel();
    }
    public function addRombel()
    {
        $wk      = Guru::all();
        $kelas   = Kelas::all();
        $jurusan = Jurusan::all();
        return view('admin.rombel.create',compact('wk','kelas','jurusan'));

    }
    // method create kelas
    public function addKelas()
    {
        return view('admin.rombel.kelas.create');
    }
    //method tambah jurusan
    public function addJurusan()
    {
        return view('admin.rombel.jurusan.create');
    }

    public function storeKelas(Request $request)
    {
        $this->validate($request,[
            'nama_kelas' =>'required',
            'seo_kelas'  =>'required|unique:kelas'#id
        ]);
        $kelas = DB::table('kelas')->insertGetId([
            'nama_kelas' => $request->nama_kelas,
            'seo_kelas'  => $request->seo_kelas
            ]);
        toastr()->success('Data berhasil disimpan!');
        return $this->index();
    }

    public function storeJurusan(Request $request)
    {
        $this->validate($request,[
            'nama_jurusan' =>'required',
            'seo_jurusan'  =>'required|unique:jurusan'#id
        ]);
        $jurusan = DB::table('jurusan')->insertGetId([
            'nama_jurusan' => $request->nama_jurusan,
            'seo_jurusan'  => $request->seo_jurusan
            ]);
        toastr()->success('Data berhasil disimpan!');
        return $this->index();;
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Rombel $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rombel $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rombel $kelas)
    {
        //
    }
}
