<?php

require_once(__DIR__.'/util/route.php');

Route::get('/login', 'Login@showLoginForm');
Route::post('/login', 'Login@loginAction');