<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

// routes/web.php または routes/api.php
Route::get('/list', [ListController::class, 'index']);
