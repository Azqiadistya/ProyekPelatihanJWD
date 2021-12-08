<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class SiswaController extends Controller
{
    public function InputSiswa(Request $dataSiswa){
        $data = siswa::all();
        return view('siswa')->with([
            'data'=>$data
        ]);
    }
    public function store(Request $dataSiswa)
    {
        $data = $dataSiswa->except(['_token']);
        siswa::insert($data);

        return redirect('/siswa');
    }
}


