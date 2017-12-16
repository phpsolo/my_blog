<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 显示后台框架集
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin/Index/shops_index');
    }

    /**
     * 显示后台首页
     */
    public function shops_index()
    {
        return view('Admin/Index/index');
    }
}
