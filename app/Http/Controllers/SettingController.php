<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewSource()
    {
        $no = 0;
        $srcgtk =  DB::table('src_jenis_gtk')->get();
        return view('induk.setting.resource.index',compact('srcgtk','no'));
    }

    public function createsource(Request $request)
    {
        $this->validate($request,[
            'jenis_gtk'      =>'required'
        ]);
        $jenisgtk = new Setting;
        $jenisgtk ->jenis_gtk = $request->jenis_gtk;
        $jenisgtk ->save();
        toastr()->success('Data berhasil disimpan!');
        return redirect('admin/source');
    }

}
