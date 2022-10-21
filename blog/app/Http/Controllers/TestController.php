<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function hello()
    {
        // $fruits = ['mangga', 'jambu', 'apel'];
        // $message = 'ini adalah message';

        // return view('contents.hello', compact('fruits', 'message'));

        $data['fruits'] = ['mangga', 'jambu', 'apel'];
        $data['message'] = 'ini adalah <strong>message</strong>';

        // return view('contents.hello', $data);
        return view('contents.hello')->with($data);
    }
}
