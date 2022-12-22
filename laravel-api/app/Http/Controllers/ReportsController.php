<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if (empty($id)) {
            $reports = Reports::get();
            return response()->json(["reports" => $reports]);
        } else {
            $reports = Reports::find($id);
            return response()->json(["reports" => $reports]);
        }
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
            $dataReports = $request->input();
            $reports = new Reports;
            $reports->name = $dataReports['name'];
            $reports->timestamps = $dataReports['timestamps'];
            $reports->report = $dataReports['report'];
            $reports->desc = $dataReports['desc'];
            $reports->image = $dataReports['image'];
            $reports->reply = $dataReports['reply'];
            $reports->save();
            return response()->json(['message' => 'Reports are added!!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $reports = $request->input();
            Reports::where('id', $id)->update([
                'name' => $reports['name'],
                'timestamps' => $reports['timestamps'],
                'report' => $reports['report'],
                'desc' => $reports['desc'],
                'image' => $reports['image'],
                'reply' => $reports['reply']
            ]);
            return response()->json(['message' => "Updated successfully!"], 202);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
