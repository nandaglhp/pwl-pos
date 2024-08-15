<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        // $data=[
        //     'kategori_kode'=>'SNK',
        //     'kategori_nama'=>'Scank/makanan ringan',
        //     'created_at'=>now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'data berhasil ditambah';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama'=>'Camilan']);
        // return 'update data berhasil, jumlah data yang terupdate' . $row . 'baris';

        // $data = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        // return 'Delete data berhasil. jumlah baris yang dihapus: ' . $data . 'baris';

        $data=DB::table('m_kategori')->get();
        return view('kategori',['data'=>$data]);
    }
}
