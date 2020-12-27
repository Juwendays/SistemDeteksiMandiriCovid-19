<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function rekapbiodata()
    {
        $biodatas = Biodata::all();

        return view('Admin.rekapbiodata',['biodatas'=>$biodatas]);
    }

    public function rekaphasil()
    {
        return view('Admin.rekaphasiltest');
    }

    public function rekapsoal()
    {
        return view('Admin.rekapsoaltest');
    }

    public function tambahsoal()
    {
        return view('Admin.tambahsoal');
    }
}
