<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$judul = $req->input('judul');
    	$penerbit = $req->input('penerbit');
    	$tahun = $req->input('tahun');
    	$pengarang = $req->input('pengarang');

    	$data=array('judul'=>$judul,'penerbit'=>$penerbit,'tahun'=>$tahun,'pengarang'=>$pengarang);

    	DB::table('tabel')->insert($data);
    }
}
