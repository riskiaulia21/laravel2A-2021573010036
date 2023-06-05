<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'sari citra lestari';
        $mahasiswa->tanggal_lahir = '2001-12-03';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }
}
