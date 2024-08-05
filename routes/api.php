`<?php
use Illuminate\Support\Facades\Route;

Route::post('media/upload', 'App\Http\Controllers\Api\Media\Store');
Route::get('media', 'App\Http\Controllers\Api\Media\All');
