<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/biodata', function () {
    $data = [
        [
            'nama' => 'santoso',
            'kelamin' => 'laki-laki',
            'email' => 'eko@gmail.com',
            'ponsel' => '085887899'
        ],
        [
            'nama' => 'putri',
            'kelamin' => 'perempuan',
            'email' => 'putri@gmail.com',
            'ponsel' => '085887899'
        ]
    ];
    return response()->json($data);
});

Route::apiResource('pegawai', PegawaiController::class);

Route::put('pegawai', [PegawaiController::class, 'update2']);
Route::delete('pegawai', [PegawaiController::class, 'destroy2']);
