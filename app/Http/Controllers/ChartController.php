<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSensor;

class ChartController extends Controller
{
    public function chartSensor()
    {
        $data = SSensor::latest()->limit(10)->get();
        
        // return view('riwayat', ['data' => $data]);
        return view('monitoring', compact('data'));
    }
}