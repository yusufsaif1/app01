<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urlGenerationController extends Controller
{
    function fun()
    {
        echo url()->current();
        echo "<br>";
        echo "<br>";
        echo url()->previous();
    }
}
