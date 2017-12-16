<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticleRequest;

class ArticleController extends Controller
{
    /**
     * 显示文章列表页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin/Article/index');
    }

    /**
     * 显示添加文章页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Article/create');
    }

    /**
     * 处理文章添加
     *
     * @return \Illuminate\Http\Response
     */
    public function doCreate(CheckArticleRequest $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
