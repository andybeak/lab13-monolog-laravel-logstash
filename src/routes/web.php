<?php

Route::get('/', function () {
    Log::debug('Debug log entry');
    Log::info('Info log entry');
    return view('welcome');
});
