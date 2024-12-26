<?php

use App\Http\Controllers\PublicIpAddressController;
use Illuminate\Support\Facades\Route;

Route::get('public-ip-address/', [PublicIpAddressController::class, 'show']);
