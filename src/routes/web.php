<?php

Route::namespace('Saif\Contact\Http\Controllers')->group(function(){

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');

});

