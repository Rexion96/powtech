<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::group(['prefix' => 'questions'], function () {
    Route::get('/one',  [QuestionController::class, 'QuestionOne']);

    Route::get('/two-part-one',  [QuestionController::class, 'QuestionTwoEndpointOne']);
    Route::get('/two-part-two',  [QuestionController::class, 'QuestionTwoEndpointTwo']);
});
