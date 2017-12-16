@extends('Admin.Index.shops_index')
@section('header')
<title>添加文章</title>
@endsection
@section('content')
<div class="margin" id="page_style">
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="text-align:center;color:red;font-size: 20px">*{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{asset('/Admin/Article/doCreate')}}" method="post">
        {{csrf_field()}}
        <div class="add_style">
            <ul>
                <li class="clearfix">
                    <label class="label_name col-xs-1"><i>*</i>标题名称：&nbsp;&nbsp;</label><div class="Add_content col-xs-11"><input name="title" type="text"  class="col-xs-6"/></div>  
                </li>
          
                <li class="clearfix">
                    <label class="label_name col-xs-1"><i>*</i>所属分类：&nbsp;&nbsp;</label>
                    <div class="Add_content col-xs-11">
                        <select name="type_id">
                            <option value="">--请选择--</option>
                        </select> 
                    </div> 
                </li>
                <li class="clearfix"><label class="label_name col-xs-1"><i>*</i>内容介绍：&nbsp;&nbsp;</label>
                <div class="Add_content col-xs-11">
                    <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                </div>
                </li> 
            </ul>
            <div class="Button_operation btn_width">
                <button class="btn button_btn bg-deep-blue">保存并提交</button>
                <button class="btn button_btn bg-gray" type="button">取消添加</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<!--复文本编辑框-->
<script type="text/javascript" charset="utf-8" src="{{asset('admin/js/utf8-jsp/ueditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('admin/js/utf8-jsp/ueditor.all.min.js')}}"> </script>
<script type="text/javascript" charset="utf-8" src="{{asset('admin/js/utf8-jsp/lang/zh-cn/zh-cn.js')}}"></script>
<script>
$(function(){
 var ue = UE.getEditor('editor');
});
 function add_category(){$(".add_category_style").toggle();}
</script>
@endsection