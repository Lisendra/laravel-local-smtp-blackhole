<?php 

Route::get('local-smtp-blackhole-test', 'Realtebo\Blackhole\BlackholeController@test');

Route::get('local-smtp-blackhole', 'Realtebo\Blackhole\BlackholeController@index');