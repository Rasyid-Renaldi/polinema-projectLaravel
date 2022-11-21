<?php

namespace App\Http\Controllers;


class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function dataSiswa()
    {
        return view('admin.dataSiswa');
    }
    public function dataLaporan()
    {
        return view('admin.dataLaporan');
    }
    public function detailLaporan()
    {
        return view('admin.detailLaporan');
    }
}
