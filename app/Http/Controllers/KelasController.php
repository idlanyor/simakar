<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Rombel;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $batas = 10;
        $kelas = Kelas::orderBy('id','asc')->paginate($batas);
        $jurusan = Jurusan::orderBy('id','asc')->paginate($batas);
        $rombel = Rombel::orderBy('id','asc')->paginate($batas);
        return view('induk.kelas.index',compact('kelas','batas','jurusan','rombel'));
    }
    // function create
    public function create()
    {
        $wk = Guru::all(); 
        $kelas = Kelas::all(); 
        $jurusan = Jurusan::all(); 
        return view('induk.kelas.create');
    }

    public function storeKelas(Request $request)
    {
        $this->validate($request,[
            'nama_kelas'      =>'required',
            'seo_kelas'       =>'required|unique:kelas'#id
        ]);
        $kelas = DB::table('kelas')->insertGetId([
            'nama_kelas' => $request->nama_kelas,
            'seo_kelas'  => $request->seo_kelas
            ]);
        toastr()->success('Data berhasil disimpan!');
        return redirect('/admin/kelas');
    }

    public function storeJurusan(Request $request)
    {
        $this->validate($request,[
            'nama_jurusan'      =>'required',
            'seo_jurusan'       =>'required|unique:jurusan'#id
        ]);
        $jurusan = DB::table('jurusan')->insertGetId([
            'nama_jurusan' => $request->nama_jurusan,
            'seo_jurusan'  => $request->seo_jurusan
            ]);
        toastr()->success('Data berhasil disimpan!');
        return redirect('/admin/kelas');
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
