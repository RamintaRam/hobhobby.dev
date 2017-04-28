<?php




Route::group(['prefix' => 'cities'], function ()
{
    Route::get('/create', function ()
    {
        return view('main');
    });

    Route::post('/create', ['as' => 'app.cities.create', 'uses' => 'HOBCitiesController@create']);
});


