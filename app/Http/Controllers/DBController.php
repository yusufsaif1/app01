<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function fetch()
    {
        $users = DB::select('select * from table1');

        return view('welcome', ['data' => $users]);
    }
    public function insert()
    {
        $res = DB::insert("insert into table1 values(?,?,?,?)", [19, "gopal", 1234, "bihar"]);
        if ($res) {
            echo "data inserted successfully";
        } else {
            echo "data not inserted";
        }
    }

    public function update()
    {
        $res = DB::update("update table1 set ENAME='viru' where id=18");
        if ($res) {
            echo "Table Updated successfully";
        } else {
            echo "updation failed";
        }
    }

    public function delete()
    {
        $res = DB::statement('delete from table1 where id=18');

        if ($res) {
            echo "Data deleted";
        } else {
            echo "deletion failed";
        }
    }
}
