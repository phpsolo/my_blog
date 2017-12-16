@extends('Admin.Index.shops_index')
@section('header')
<script src="{{asset('admin/js/laydate/laydate.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.dataTables.bootstrap.js')}}"></script>
<title>分类列表</title>
@endsection
@section('content')
<div class="margin" id="page_style">
	<div class="operation clearfix">
		<button class="btn button_btn btn-danger" type="button" onclick=""><i class="fa fa-trash-o"></i>&nbsp;删除</button>
		<span class="submenu"><a href="{{url('/Admin/Type/create')}}" class="btn button_btn bg-deep-blue" title="添加分类"><i class="fa  fa-edit"></i>&nbsp;添加分类</a></span>
		<!-- <div class="search  clearfix">
			<label class="label_name">分类搜索：</label><input name="" type="text"  class="form-control col-xs-6"/><button class="btn button_btn bg-deep-blue " onclick=""  type="button"><i class="fa  fa-search"></i>&nbsp;搜索</button>
		</div> -->
	</div>
	<!--列表展示-->
	<div class="list_Exhibition margin-sx">
		<table class="table table_list table_striped table-bordered" id="sample-table">
			<thead>
				<tr>
					<th width="30"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
					<th>ID</th>   
					<th>分类名称</th>   
					<th width="150">状态</th>
					<th width="200">操作</th>
				</tr>   
			</thead>
			<tbody>
				<tr>
					<td>
						<label><input type="checkbox" class="ace"><span class="lbl"></span></label>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="javascript:ovid()" class="btn bg-deep-blue operation_btn">修改</a>
						<a href="javascript:ovid()" onclick="picture_del(this,'+10001+')" class="btn btn-danger operation_btn">删除</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
@section('js')
<script>
jQuery(function($) {
	$('table th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
			this.checked = that.checked;
			$(this).closest('tr').toggleClass('selected');
		});	
	});
});
	/*分类-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',{icon:0,},function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>
@endsection