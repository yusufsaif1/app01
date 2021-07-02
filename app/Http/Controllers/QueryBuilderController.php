<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function fetch()
    {
        // $data = DB::table('table1')->where("ENAME", "ravi")->value('ENAME');
        // $data = DB::table('table1')->pluck('ENAME');
        // $data = DB::table('table1')->orderBy('id')->chunk(5, function ($table1) {
        //     foreach ($table1 as $item) {
        //         echo $item->ENAME;
        //     }
        // });
        // DB::table('table1')->where('ENAME', 'das')
        //     ->chunkById(100, function ($table1) {
        //         foreach ($table1 as $user) {
        //             DB::table('table1')
        //                 ->where('id', $user->id)
        //                 ->update(['ENAME' => "RaviDAS"]);
        //         }
        //     });

        $lc = DB::table('table1')->orderBy('id')->chunk(3, function ($table1) {
            return view("DbView", compact($table1));
        });
    }

    // public function insert()
    // {
    //     DB::table('table1')->insert([]);
    // }
}
