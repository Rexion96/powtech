<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionOneRequest;

class QuestionOneController extends Controller
{
    public function a(QuestionOneRequest $request){
        $value = $request['value'];

        $arr = array();

        foreach (range(1, $value) as $i) {
            if ($i % 3 == 0 && $i %  5 == 0) {
                array_push($arr, 'fizzbuzz');
            } else if ($i %  5 == 0) {
                array_push($arr, 'buzz');
            } else if ($i % 3 == 0) {
                array_push($arr, 'fizz');
            } else {
                array_push($arr, $i);
            }
        }

        return $arr;
    }
}
