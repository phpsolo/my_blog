@extends('Admin.Index.shops_index')
@section('header')
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
<style>
    label:hover{
        cursor: pointer;
        margin: 0;
        padding: 0;
    }
</style>
<title>单页</title>
@endsection
@section('content')
<div class="margin" id="page_style">
    <div class="add_style">
        @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="text-align:center;color:red;font-size: 20px">*{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{asset('/Admin/Type/doCreate')}}" method="post">
            {{csrf_field()}}
            <ul>
                <li class="clearfix">
                    <label class="label_name col-xs-1"><i>*</i>分类名称：&nbsp;&nbsp;</label><div class="Add_content col-xs-11"><input name="name" type="text"  class="col-xs-6"/></div>
                </li>
                <li class="clearfix">
                    <label class="label_name col-xs-1"><i>*</i>显示/隐藏：&nbsp;&nbsp;</label>
                    <div class="Add_content col-xs-11">
                        <label><span>显示：</span><input checked style="padding:0;margin:0;vertical-align: middle;" name="status" type="radio" value="1" /></label>
                        <label><span>隐藏：</span><input style="padding:0;margin:0;vertical-align: middle;" name="status" type="radio" value="2" /></label>
                    </div>
                </li>
            </ul>
            <div class="Button_operation btn_width">
                <button class="btn button_btn bg-deep-blue">保存并提交</button>
                <a class="btn button_btn bg-gray">取消添加</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script>
 /*checkbox激发事件*/
$('#checkbox').on('click',function(){
    if($('input[name="checkbox"]').prop("checked")){
         $('.Date_selection ').css('display','block');
        }
    else{
        
         $('.Date_selection').css('display','none');
        }   
    });
</script>
@endsection