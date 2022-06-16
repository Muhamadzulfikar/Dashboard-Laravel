<?php

namespace App\Http\Controllers;
use App\Models\notifications;
use App\Models\news;
use App\Models\roasters;
use Illuminate\Http\Request;

class InformationDashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        $notification = notifications::all();
        $day = date('l');
        $roaster = roasters::where('day', '=', $day)->get();
        return view('dashboard.index', compact('news', 'notification', 'roaster'));
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
     * @param  \App\Models\information_dashboards  $information_dashboards
     * @return \Illuminate\Http\Response
     */
    public function show(information_dashboards $information_dashboards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\information_dashboards  $information_dashboards
     * @return \Illuminate\Http\Response
     */
    public function edit(information_dashboards $information_dashboards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\information_dashboards  $information_dashboards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information_dashboards $information_dashboards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\information_dashboards  $information_dashboards
     * @return \Illuminate\Http\Response
     */
    public function destroy(information_dashboards $information_dashboards)
    {
        //
    }
}
