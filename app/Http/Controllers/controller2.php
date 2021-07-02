<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostReques;
use App\Http\Requests\storePostRequest;

class controller2 extends Controller
{
    public function store(StorePostRequest $request)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validate = $request->validated();
        $fname = $validate['fname'];

        $request->session()->put("name", $fname);
        return redirect('/');
    }
}
