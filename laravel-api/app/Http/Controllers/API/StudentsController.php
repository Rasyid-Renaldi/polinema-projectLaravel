<?php

namespace App\Http\Controllers;

use App\Models\MD\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($id = null)
    {
        if (empty($id)) {
            $students = Student::get();
            // return response()->json(["students" => $students]);
            return view('admin.dataSiswa', compact('students'));
        } else {
            $students = Student::find($id);
            return response()->json(["students" => $students]);
        }
    }

    public function edit($id)
    {
        $title = 'Edit Student';
        $students = Student::findOrFail($id);
        return view('admin.editSiswa', compact('students', 'title'));
    }

    public function updateStudents(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $students = $request->input();
            Student::where('id', $id)->update(['name' => $students['name'], 'email' => $students['email'], 'status' => $students['status']]);
            return response()->json(['message' => "Updated successfully!"], 202);
        }
    }
}
