<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionOneController;

Route::group(['prefix' => 'question-one'], function () {
    Route::get('/a',  [QuestionOneController::class, 'a']);
});
