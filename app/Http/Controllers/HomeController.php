<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request) 
    {
        // $data = $request->session()->all();
        return view('home.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        \LogActivity::addToLog('Browse activity log');
        return view('logActivity',compact('logs'));
    }
}