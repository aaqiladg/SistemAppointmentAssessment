<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class HomeController extends Controller
{

    public function __construct(){
        $this->Jadwal = new Jadwal();
        $this->Mahasiswa = new Mahasiswa();
        $this->Dosen = new Dosen();
    }
    
    public function index() {
        $role=Auth::user()->role;

        if($role=='1') {
                $data = ['mahasiswa' => $this->Mahasiswa->allData()];
                return view('admin.mahasiswa', $data);
        }

        else if($role == '2') {
            $jadwals = Jadwal::all();
    	$data = ['jadwal' => $this->Jadwal->allData(),];
        return view('mahasiswa.jadwal',compact('jadwals'));
        }
        else{
            $jadwals = Jadwal::all();
    	$data = ['jadwal' => $this->Jadwal->allData(),];
        return view('dosen.jadwal',compact('jadwals'));

        }
    }
}
