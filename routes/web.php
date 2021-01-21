<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

/* **************************** AUTH PAGE **************************** */

require 'auth.php';

/* **************************** BACKEND PAGE **************************** */

require 'backend.php';
