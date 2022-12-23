<?php

namespace App\Http\Controllers;

use App\Models\Student;

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
    public function forum()
    {
        return view('admin.forum');
    }
    public function coba()
    {
        return view('admin.coba');
    }
    public function adminTanya()
    {
        return view('admin.adminTanya');
    }
    public function detailTanya()
    {
        return view('admin.detailTanya');
    }
    public function editSiswa()
    {
        return view('admin.editSiswa');
    }
    public function popupTest()
    {
        return view('admin.popupTest');
    }
    public function editPostingan()
    {
        return view('admin.editPostingan');
    }
    public function dashboardNew()
    {
        return view('admin.dashboardNew');
    }
    public function editKomen()
    {
        return view('admin.editKomen');
    }
    public function editForum()
    {
        return view('admin.editForum');
    }
    public function jajalan()
    {
        return view('admin.jajalan');
    }

    public function getStudents()
    {
        $students = Student::get();

        // return response()->json(["students" => $students]);
        return view('admin.dataSiswa', compact('students'));
        // return $students;
    }


    
}
