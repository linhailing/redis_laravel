<?php
/**
 * Created by PhpStorm.
 * User: haili
 * Date: 2018/5/15
 * Time: 17:10
 */
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

class RedisController extends Controller{
    public function index(){
        $name = Redis::exists('name');
        echo "index".$name;
    }
}