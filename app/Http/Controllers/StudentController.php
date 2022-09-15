<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('master');
    }
    //
    public function hello()
    {
        return '<h1>Belajar Laravel</h1>';
    }

    public function list($nama)
    {
        $nama ='jimmy';
        $jurusan = 'RPL';
        $mapel = ['PBO','BASDAT','ANDROID','SAP','COBOL'];
        return view('studentlist', compact('jurusan', 'mapel'));
    }
}
