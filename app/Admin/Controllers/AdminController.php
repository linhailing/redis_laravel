<?php
/**
 * Created by PhpStorm.
 * User: haili
 * Date: 2018/5/15
 * Time: 18:04
 */
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller{
    public function index(){
        return 'admin/index';
    }
    public function test(){
        return 'admin/tests';
    }
}