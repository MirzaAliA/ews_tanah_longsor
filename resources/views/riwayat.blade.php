@extends('layouts.layout')

@section('container')

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Status Siaga</th>
            <th>Status Tanah</th>
            <th>Status Hujan</th>
            <th>Kecepatan Sumbu X</th>
            <th>Kecepatan Sumbu Y</th>
            <th>Kecepatan Sumbu Z</th>
            <th>Gyro Sumbu X</th>
            <th>Gyro Sumbu Y</th>
            <th>Gyro Sumbu Z</th>
            <th>Curah Hujan</th>
            <th>Tip Hujan</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->statuss_siaga }}</td>
                <td>{{ $item->statuss_mpu }}</td>
                <td>{{ $item->statuss_hujan }}</td>
                <td>{{ $item->mpus_accelerationx }}</td>
                <td>{{ $item->mpus_accelerationy }}</td>
                <td>{{ $item->mpus_accelerationz }}</td>
                <td>{{ $item->mpus_gyrox }}</td>
                <td>{{ $item->mpus_gyroy }}</td>
                <td>{{ $item->mpus_gyroz }}</td>
                <td>{{ $item->rains_curah }}</td>
                <td>{{ $item->rains_tip }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection