<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getForums($id = null)
    {
        if (empty($id)) {
            $forums = Forum::get();
            return response()->json(["forums" => $forums]);
        } else {
            $forums = Forum::find($id);
            return response()->json(["forums" => $forums]);
        }

        // $forums = Forum::get();
        // return response()->json(["forums" => $forums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function updateForums(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
