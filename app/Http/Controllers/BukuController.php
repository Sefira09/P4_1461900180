<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BukuExport;
use App\Models\buku;
use App\Models\jenis_buku;
use App\Models\rak_buku;


class BukuController extends Controller
{
    public function view(){
        $BukuController=rak_buku::join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();
        // dd($BukuController);
        return view('prak0180', [
            'BukuController' => $BukuController,
        ]);

    }
    public function export(){
		return Excel::download(new BukuExport, 'Data_1461900180.xlsx');
	}


}