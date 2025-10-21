<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['pong' => true, 'message' => 'API PIFORES connectée ✅']);
});
