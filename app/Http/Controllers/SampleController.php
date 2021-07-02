<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function foo()
    {
        return view('foo', [
            'key' => 'The big brown fox jumped over the lazy dog'
        ]);
    }
    public function bar()
    {
        $key = 'If a would chuck can chuck wood,';

        return view('foo', compact('key'));
    }
    public function baz()
    {
        return view('foo')->with(
            'key',
            'How much woood would a woodchuck chuck.'
        );
    }
}
