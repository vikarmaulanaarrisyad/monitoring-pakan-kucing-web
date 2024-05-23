<?php

use App\Http\Controllers\Api\ApiPenjadwalanPakanController;
use App\Http\Controllers\SensorPakanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/penjadwalanpakan/getJadwalPakan', [ApiPenjadwalanPakanController::class, 'getJadwalPakan'])->name('api.penjadwalanpakan.jadwalpakan');
Route::get('/v1/penjadwalanpakan/bacadata', [ApiPenjadwalanPakanController::class, 'bacadata'])->name('api.penjadwalanpakan.bacadata');
Route::get('/v1/penjadwalanpakan/ubahstatus', [ApiPenjadwalanPakanController::class, 'ubahstatus'])->name('api.penjadwalanpakan.ubahstatus');
// Route::apiResource('/v1/penjadwalanpakan', ApiPenjadwalanPakanController::class);

Route::get('/v1/sensorpakan/delete_all', [SensorPakanController::class, 'deleteAll'])->name('api.sensorpakan.delete_all');
