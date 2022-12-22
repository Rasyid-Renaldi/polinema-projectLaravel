<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexs($id = null)
    {
        if (empty($id)) {
            $students = Student::get();
            return response()->json(["students" => $students]);
        } else {
            $students = Student::find($id);
            return response()->json(["students" => $students]);
        }
    }

    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $studentData = $request->input();
            $students = new Student;
            $students->name = $studentData['name'];
            $students->email = $studentData['email'];
            $students->status = $studentData['status'];
            $students->save();
            return response()->json(['message' => 'Add student successfully!!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $students = $request->input();
            Student::where('id', $id)->update(['name' => $students['name'], 'email' => $students['email'], 'status' => $students['status']]);
            return response()->json(['message' => "Updated successfully!"], 202);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
