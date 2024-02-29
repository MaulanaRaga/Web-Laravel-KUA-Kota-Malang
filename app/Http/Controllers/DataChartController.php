<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataChartController extends Controller
{
 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('datachart');
    }
}
