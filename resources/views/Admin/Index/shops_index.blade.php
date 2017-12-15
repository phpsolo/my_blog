<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{asset('admin/css/shop.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('admin/skin/default/skin.css')}}" rel="stylesheet" type="text/css" id="skin" />
        <link href="{{asset('admin/css/Sellerber.css')}}" type="text/css"  rel="stylesheet" />
        <link href="{{asset('admin/css/bkg_ui.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('admin/font/css/font-awesome.min.css')}}"  rel="stylesheet" type="text/css" />
        <script src="{{asset('admin/js/jquery-1.9.1.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('admin/js/layer/layer.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/js/Sellerber.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/js/shopFrame.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('admin/js/jquery.cookie.js')}}"></script> 
        <title>个人博客后台首页</title>
        @yield('header')
    </head>
<body id="menu_style">
    @section('content')
    <div class="Sellerber" id="Sellerber">
        <!--顶部-->
        <div class="Sellerber_header apex clearfix" style="background: black" id="Sellerber_header">
            <div style="margin-left: 20px;height: 70px;display: inline-block;text-align: center;line-height: 70px">
                <span style="font-size: 20px">苟富贵，无相忘</span>
            </div>
            <!-- <div class="l_f logo"><img src="{{asset('admin/images/logo_03.png')}}" /></div> -->
            <div class="r_f Columns_top clearfix">
                <div class="news l_f"><a href="#" class="fa  fa-bell "></a><em>5</em></div>
                <div class="administrator l_f">
                    <img src="{{asset('admin/images/avatar.png')}}"  width="36px"/>
                    <span class="user-info">欢迎你,超级管理员</span>
                    <i class="glyph-icon fa  fa-caret-down"></i>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i>个人信息</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>系统设置</a></li>
                        <li><a href="javascript:void(0)" id="Exit_system"><i class="fa fa-user-times"></i>退出</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <!--左侧-->
        <div class="Sellerber_left menu" id="menuBar">
            <div class="show_btn" id="rightArrow"><span></span></div>
            <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
            <div class="menu_style" id="menu_style">
                <div class="list_content">    
                    <dl class="nav nav-list" id="menu_list">
                        <dt>
                            <a href="{{url('/Admin/Index/index')}}" class="iframeurl" title=""><i class="fa fa-home"></i><span class="menu-text">商城首页</span></a>
                        </dt>
                         
                        <dt class="nav_link">
                            <a href="#" class="dropdown-toggle title_nav"><i class="fa fa-bar-chart"></i><span class="menu-text"> 评论管理 </span><b class="arrow fa fa-angle-down"></b></a>
                        </dt>
                        <dd class="submenu">
                            <ul>
                                <li class="home"><a href="javascript:void(0)" name="system_info.html" title="订单报表" class="iframeurl"><i class="fa fa-angle-double-right"></i>评论列表</a></li>
                            </ul>
                        </dd>
                        <dt class="nav_link">
                            <a href="#" class="dropdown-toggle title_nav"><i class="fa fa-user"></i><span class="menu-text"> 会员管理 </span><b class="arrow fa fa-angle-down"></b></a>
                        </dt>
                        <dd class="submenu">
                            <ul>
                                <li class="home"><a href="javascript:void(0)" name="member_list.html" title="会员列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>会员列表</a></li>
                                <!-- <li class="home"><a href="javascript:void(0)" name="Columns.html" title="等级管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>等级管理</a></li> -->
                                <!-- <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="会员记录" class="iframeurl"><i class="fa fa-angle-double-right"></i>会员记录</a></li> -->
                            </ul>
                        </dd>
                        <!-- <dt class="nav_link">
                            <a href="#" class="dropdown-toggle title_nav"><i class="fa fa-cogs"></i><span class="menu-text"> 系统管理 </span><b class="arrow fa fa-angle-down"></b></a>
                        </dt>
                        <dd class="submenu">
                            <ul>
                                <li class="home"><a href="javascript:void(0)" name="system_info.html" title="系统信息" class="iframeurl"><i class="fa fa-angle-double-right"></i>系统信息</a></li>
                                <li class="home"><a href="javascript:void(0)" name="Columns.html" title="自定义导航栏" class="iframeurl"><i class="fa fa-angle-double-right"></i>自定义导航栏</a></li>
                                <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>日志操作</a></li>
                            </ul>
                        </dd> -->
                        <dt class="nav_link">
                            <a href="#" class="dropdown-toggle title_nav"><i class="fa fa-file-text-o"></i><span class="menu-text"> 文章管理 </span><b class="arrow fa fa-angle-down"></b></a>
                        </dt>
                        <dd class="submenu">
                            <ul>
                                <li class="home"><a href="javascript:void(0)" name="Article_list.html" title="文章列表" class="iframeurl"><i class="fa fa-angle-double-rightt"></i>文章列表</a></li>
                            </ul>
                        </dd>
                           
                          
                        <!-- <dt class="nav_link">
                            <a href="#" class="dropdown-toggle title_nav"><i class="fa fa-users"></i><span class="menu-text">管理员管理 </span><b class="arrow fa fa-angle-down"></b></a>
                        </dt>
                        <dd class="submenu">
                            <ul>
                                <li class="home"><a href="javascript:void(0)" name="admin_Competence.html" title="权限设置" class="iframeurl"><i class="fa fa-angle-double-right"></i>权限设置</a></li>
                                <li class="home"><a href="javascript:void(0)" name="administrator_list.html" title="管理员列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>管理员列表</a></li>
                                <li class="home"><a href="javascript:void(0)" name="Personal_info.htm" title="个人信息" class="iframeurl"><i class="fa fa-angle-double-right"></i>个人信息</a></li>
                            </ul>
                        </dd> -->    
                    </dl>  
                </div>
            </div>
        </div>
        <!--内容-->
        <div class="Sellerber_content" id="contents">
            <div class="breadcrumbs" id="breadcrumbs">
                <!-- <a id="js-tabNav-prev" class="radius btn-default left_roll" href="javascript:;"><i class="fa fa-backward"></i></a> -->
                <div class="breadcrumb_style clearfix">
                    <ul class="breadcrumb clearfix" id="min_title_list">
                        <li class="active home">
                            <span title="我的桌面" data-href="index.html"><i class="fa fa-home home-icon"></i>首页</span>
                        </li>
                    </ul>
                </div>
                <!-- <a id="js-tabNav-next" class="radius btn-default right_roll" href="javascript:;"><i class="fa fa-forward"></i></a> -->
                <a href="javascript:void()" class="radius roll-right fullscreen"><i class="fa fa-arrows-alt"></i></a>
            </div>
            <!--具体内容-->  
            <div id="iframe_box" class="iframe_content">
                <div class="show_iframe" id="show_iframe">
                    <iframe scrolling="yes" class="simei_iframe" frameborder="0" src="{{url('/Admin/Index/shops_index')}}" name="iframepage" data-href="{{url('/Admin/Index/shops_index')}}"></iframe>
                </div>
            </div>
        </div>
        <!--底部-->
        <div class="Sellerber_bottom info" id="bottom">
            <span class="l_f">穷则独善其身，达则兼济天下</span>
        </div>
    </div>
    @show
</body>
</html>
@yield('js')
<script>
//设置框架
 $(function() { 
    $("#Sellerber").frame({
        float : 'left',
        color_btn:'.skin_select',
        header:70,//顶部高度
        bottom:30,//底部高度
        menu:200,//菜单栏宽度
        Sellerber_menu:'.list_content',
        Sellerber_header:'.Sellerber_header',
    });
});
//时间设置
  function currentTime(){ 
   var weekday=new Array(7)
    weekday[0]="星期一"
    weekday[1]="星期二"
    weekday[2]="星期三"
    weekday[3]="星期四"
    weekday[4]="星期五"
    weekday[5]="星期六"
    weekday[6]="星期日"    
    var d=new Date(),str='';    
    str+=d.getFullYear()+'年'; 
    str+=d.getMonth() + 1+'月'; 
    str+=d.getDate()+'日'; 
    str+=d.getHours()+'时'; 
    str+=d.getMinutes()+'分'; 
    str+= d.getSeconds()+'秒'+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    str+=weekday[d.getDay()-1]; 
    return str; 
} 
setInterval(function(){$('#time').html(currentTime)},1000); 
$('#Exit_system').on('click', function(){
      layer.confirm('是否确定退出系统？', {
     btn: ['是','否'] ,//按钮
     icon:2,
    }, 
    function(){
      location.href="login.html";
        
    });
});
</script>
<script type="text/javascript">
$("#menu_style").niceScroll({  
    cursorcolor:"#888888",  
    cursoropacitymax:1,  
    touchbehavior:false,  
    cursorwidth:"5px",  
    cursorborder:"0",  
    cursorborderradius:"5px"  
}); 
</script>

