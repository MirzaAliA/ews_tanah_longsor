<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSensor;

class ChartController extends Controller
{
    public function chartSensor()
    {
        $datachart = SSensor::latest()->limit(10)->get();
        
        // return view('riwayat', ['data' => $data]);
        return view('monitoring', compact('datachart'));
    }

    public function chartSensor2()
    {
        $datachart = SSensor::latest()->limit(10)->get();
        
        // return view('riwayat', ['data' => $data]);
        return view('riwayat', compact('datachart'));
    }
}