<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Prince\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Prince\Calculator\CalculatorController@subtract');