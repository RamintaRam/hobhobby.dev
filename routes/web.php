<?php




Route::group(['prefix' => 'cities'], function ()
{
    Route::get('/create', function ()
    {
        return view('main');
    });

    Route::post('/create', ['as' => 'app.cities.create', 'uses' => 'HOBCitiesController@create']);
});



Route::group(['prefix' => 'hobbies'], function ()
{
    Route::get('/create', function ()
    {
        return view('hobby');
    });

    Route::post('/create', ['as' => 'app.hobbies.create', 'uses' => 'HOBHobbiesController@create']);
});



Route::group(['prefix' => 'people'], function ()
{
    Route::get('/create', ['uses' => 'HOBPeopleController@showCreate']);

    Route::post('/create', ['as' => 'app.people.create', 'uses' => 'HOBPeopleController@create']);
});


