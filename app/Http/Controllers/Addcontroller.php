<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Addcontroller extends Controller
{
    public function redis1()
    {
        $key = "aaaa";
        $val = "hello world";
        Redis::set($key,$val);
        echo "set 成功";
    }

    public function redis2()
    {
        $key = "aaaa";
        $val = Redis::get($key);

        echo "val: ".$val;
    }

    public function mysql1()
    {
        $list = DB::table()->all();
        var_dump($list);
    }
}
