<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RealtimeSensor;
use App\Http\Controllers\HistorySensor;
use App\Http\Controllers\HistorySensorSetting;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('mitigasi', function () {
    return view('aman', [
        "title" => "Mitigasi"
    ]);
});

Route::get('aman', function () {
    return view('aman', [
        "title" => "Mitigasi-Aman"
    ]);
});

Route::get('siaga', function () {
    return view('siaga', [
        "title" => "Mitigasi-Siaga"
    ]);
});

Route::get('bahaya', function () {
    return view('bahaya', [
        "title" => "Mitigasi-Bahaya"
    ]);
});

Route::get('monitoring', function () {
    return view('monitoring', [
        "title" => "Monitoring"
    ]);
});

Route::get('riwayat', function () {
    return view('riwayat', [
        "title" => "Riwayat"
    ]);
});



////////////////////////////////////////
//routing masing2 data realtime sensor

//routing status siaga
Route::get('/statussiaga', [
    RealtimeSensor::class, 'bacaStatusSiaga'
]);

//routing acceleration sumbu x
Route::get('/bacampu_accx', [
    RealtimeSensor::class, 'bacaSensorMpuAccX'
]);

//routing acceleration sumbu y
Route::get('/bacampu_accy', [
    RealtimeSensor::class, 'bacaSensorMpuAccY'
]);

//routing acceleration sumbu z
Route::get('/bacampu_accz', [
    RealtimeSensor::class, 'bacaSensorMpuAccZ'
]);

//routing gyro sumbu x
Route::get('/bacampu_gyrox', [
    RealtimeSensor::class, 'bacaSensorMpuGyroX'
]);

//routing gyro sumbu y
Route::get('/bacampu_gyroy', [
    RealtimeSensor::class, 'bacaSensorMpuGyroY'
]);

//routing gyro sumbu z
Route::get('/bacampu_gyroz', [
    RealtimeSensor::class, 'bacaSensorMpuGyroZ'
]);

//routing curah hujan
Route::get('/bacarain_curah', [
    RealtimeSensor::class, 'bacaSensorRainCurah'
]);

//routing tip hujan
Route::get('/bacarain_tip', [
    RealtimeSensor::class, 'bacaSensorRainTip'
]);

//routing status mpu
Route::get('/statusmpu', [
    RealtimeSensor::class, 'bacaStatusMpu'
]);

//routing status hujan
Route::get('/statushujan', [
    RealtimeSensor::class, 'bacaStatusHujan'
]);


////////////////////////////////////////////////////////
//routing data masukan dari esp32 dalam bentuk link http

//routing bacaan realtime dari esp32 ke database
Route::get('/simpansensor/{mpuaccelerationx}/{mpuaccelerationy}/{mpuaccelerationz}/{mpugyrox}/{mpugyroy}/{mpugyroz}/{raincurah}/{raintip}/{statussiaga}/{statusmpu}/{statushujan}', [
    RealtimeSensor::class, 'simpanSensor'
]);

//routing bacaan simpan dari esp32 ke database
Route::get('/simpanberkala/{mpuaccelerationx}/{mpuaccelerationy}/{mpuaccelerationz}/{mpugyrox}/{mpugyroy}/{mpugyroz}/{raincurah}/{raintip}/{statussiaga}/{statusmpu}/{statushujan}', [
    HistorySensorSetting::class, 'simpanBerkala'
]);

//routing history ambil 100 data
Route::get('/data', [
    HistorySensor::class, 'indexSensor'
]);