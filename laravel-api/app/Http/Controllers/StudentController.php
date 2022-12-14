<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents($id = null)
    {
<<<<<<< HEAD
        if (empty($id)) {
            $students = Student::get();
            return response()->json(["students" => $students]);
        } else {
            $students = Student::find($id);
            return response()->json(["students" => $students]);
        }

        // $students = Student::get();
        // return response()->json(["students" => $students]);
=======
        $students = Student::get();
        
        // return response()->json(["students" => $students]);
        return view('admin.jajalan', compact('students'));
>>>>>>> 528882e891c098457a23c12a829d18a8136ae0cf
        // return $students;
    }

    public function updateStudents(Request $request)
    {
        if ($request->isMethod('put')) {
            $students = $request->input();
            Student::where('id', $students['id'])->update(['name' => $students['name'], 'email' => $students['email'], 'status' => $students['status']]);
            return response()->json(['message' => "Updated successfully!"], 202);
        }
    }
}
