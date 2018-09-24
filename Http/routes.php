<?php

Route::group(['middleware' => 'web', 'prefix' => 'proton', 'namespace' => 'Modules\Proton\Http\Controllers'], function()
{
    Route::get('/', 'ProtonController@index');
});
