@extends('Admin.Index.shops_index')
@section('header')
<script src="{{asset('admin/js/dist/echarts.js')}}" type="text/javascript"></script>
<title>首页</title>
@endsection
@section('content')
<div id="index_style" style="height:100%" class="clearfix">
    <div class="spacing_style" ></div>
    <div class="margin-bottom clearfix ">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-4">
            <a href="javascript:ovid()" class="tile-button btn_Plate bg-green">
                <div class="carousel Module_info">
                    <div class="left_img bg_color_green">
                        <i class="fa  fa-comments-o"></i>
                        <h3>留言</h3>
                    </div>
                    <div class="right_info">4567条</div>
                </div>
            </a>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-4">
            <a href="javascript:ovid()" class="tile-button btn_Plate bg-orange">
                <div class="carousel Module_info">
                    <div class="left_img bg_color_orange">
                        <i class="fa  fa-volume-up "></i>
                        <h3>通知</h3>
                    </div>
                <div class="right_info">456条</div>
                </div>
            </a>
        </div>
    </div>
    <div class="center  clearfix margin-bottom">
        <!--店铺信息-->
        <div class="col-xs-9">
            <div class="Shops_info clearfix frame">
                <div class="left_shop">
                    <div class="left_shop_logo">
                        <div class="shop_logo"><span class="bg_yuan"></span><img src="{{asset('admin/images/dp_logo.jpg')}}" /></div>
                        <a href="#" class="btn bg-deep-blue paddings">进入首页</a>
                    </div>
                    <div class="Shops_content">
                        <p><label class="name">商城名称：</label>三台山购物网</p>
                        <ul class="clearfix">
                            <li><label class="name">店铺等级：</label>三级</li>
                            <li><label class="name">商城类型：</label>电子商务</li>
                            <li><label class="name">销售类型：</label>综合</li>
                            <li><label class="name">店铺ID：</label>234565</li>
                            <li><label class="name">商家ID：</label>34656565</li>
                            <li><label class="name">开通时间：</label>2016-08-21</li>
                        </ul>
                    </div>
                    <div class="right_shop">
                        <p> 店铺动态评分：</p>
                        <ul>
                            <li><label class="name">相符描述</label><span class="score">4.5分</span></li>
                            <li><label class="name">服务态度</label><span class="score">4.0分</span></li>
                            <li><label class="name">发货速度</label><span class="score">4.6分</span></li>
                        </ul>
                    </div>
                </div>
                <div class="operating_style Quick_operation" >
                    <ul>
                        <li class="submenu"><a href="javascript:void(0)" name="add_product.html" class="btn" title="添加产品"><i class="fa  fa-edit"></i>&nbsp;添加产品</a></li> 
                        <li class="submenu"><a href="javascript:void(0)" name="add_Advertising.html" class="btn" title="添加广告"><i class="fa  fa-edit"></i>&nbsp;添加广告</a></li>
                        <li class="submenu"><a href="javascript:void(0)" name="add_Article.html" class="btn" title="添加文章"><i class="fa  fa-edit"></i>&nbsp;添加文章</a></li>
                        <li class="submenu"><a href="javascript:void(0)" name="add_Singlepag.html" class="btn" title="新增单页面"><i class="fa  fa-edit"></i>&nbsp;新增单页面</a></li>
                    </ul>  
                </div>
            </div>
        </div>
        <div class=" col-xs-3">
            <div class="admin_info frame clearfix">
                <div class="title_name"><i></i>登陆记录 <a href="#">+更多</a></div>
                <table class="record_list table table_list">
                    <tbody>
                        <tr><td>管理员</td><td>2016-08-04 12:45:43</td></tr>
                        <tr><td>管理员</td><td>2016-08-14 23:34:23</td></tr>
                        <tr><td>管理员</td><td>2016-08-24 11:34:53</td></tr>
                        <tr><td>管理员</td><td>2016-08-24 11:34:53</td></tr>
                        <tr><td>管理员</td><td>2016-08-24 11:34:53</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!---->
    <div class="Order_form ">
        <div class="col-xs-6 col-lg-7">
            <div class="frame margin-right clearfix">
                <div class="title_name"><i></i>店铺/订单状态提示</div>
                <div class="clearfix">
                    <div class="col-xs-3 col-lg-6 ">   
                        <div class="prompt_name"><i class="icon_Order"></i>订单& 商品</div>
                        <ul class="padding list_info">   
                            <li>代发货订单 &nbsp;<a href="">(02)</a></li>
                            <li>已完成订单 &nbsp;<a href="">(32)</a></li>
                            <li>未完成订单 &nbsp;<a href="">(02)</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 col-lg-6">    
                        <div class="prompt_name"><i class="icon_Promotions"></i>促销</div>
                        <ul class="padding list_info">   
                            <li>待审核的促销 &nbsp;<a href="">(02)</a></li>
                            <li>发布的促销 &nbsp;<a href="">(32)</a></li>
                            <li>即将结束的促销 &nbsp;<a href="">(02)</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 col-lg-6">    
                        <div class="prompt_name"><i class="icon_Aftermarket"></i>售后</div>
                        <ul class="padding list_info"> 
                            <li>待处理订单 &nbsp;<a href="">(02)</a></li>
                            <li>待退款订单 &nbsp;<a href="">(32)</a></li>
                            <li>待处理售后单 &nbsp;<a href="">(02)</a></li>  
                        </ul>
                    </div>
                    <div class="col-xs-3 col-lg-6 ">  
                        <div class="prompt_name"><i class="icon_Billing"></i>结算</div>
                        <ul class="padding list_info">  
                            <li>待支付 &nbsp;<a href="">(02)</a></li>
                            <li>待结算确认 &nbsp;<a href="">(32)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="dd_echarts">
                    <div id="main" style="width:100%; height:225px"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 ranking_style col-lg-5" >
            <div class="frame clearfix">
                <div class="title_name"><i></i>商品销售排行</div>
                <table  class="table table_list ranking_list">
                    <thead>
                        <th width="50">排名</th>
                        <th>商品编号</th>
                        <th>商品名称</th>
                        <th width="80">销售数量</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td ><em>1</em></td>
                            <td>2345776</td>
                            <td><a href="#">联想（ThinkPad ）轻薄系列</a></td>
                            <td>23</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection