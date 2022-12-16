<?php

namespace App\Http\Controllers;

use App\Models\MD\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if (empty($id)) {
            $forums = Forum::get();
            return response()->json(["forums" => $forums]);
        } else {
            $forums = Forum::find($id);
            return response()->json(["forums" => $forums]);
        }
    }

    public function create(Request $request, $id)
    {
        //
    }


    public function edit(Forum $forum)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $forums = $request->input();

            // $rules = [
            //     "topics" => "required|regex:/^[\pL\s\-]+$/u",
            //     "email" => "required|email|unique:forums",
            //     "password" => "required"
            // ];

            // $customMessages = [
            //     'name.required' => 'Name is required',
            //     'email.required' => 'Email is required',
            //     'email.email' => 'Valid Email is required',
            //     'email.unique' => 'Email already exists in database',
            //     'password.required' => 'Password is required'
            // ];

            // $validator = Validator::make($forums, $rules, $customMessages);

            // if ($validator->fails()) {
            //     return response()->json($validator->errors(), 422);
            // }

            Forum::where('id', $id)->update(['topics' => $forums['topics'], 'count_posts' => $forums['count_posts'], 'count_students' => $forums['count_students']]);
            return response()->json(['message' => "Updated successfully!"], 202);
        }
    }

    public function destroy($id)
    {
        Forum::where('id', $id)->delete();
        return response()->json(['message' => 'Topics Deleted!!'], 202);
    }
}
