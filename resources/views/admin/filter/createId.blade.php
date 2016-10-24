@extends('admin.layouts.master')
@section('title')
@endsection
@section('title.name')
@endsection
@section('link')

	<li><a href="">
		<img src="{{ asset('_asset/images/icons/control/16/list.png') }}" />
		<span>Danh sách</span>
	</a></li>
	
@endsection
@section('content')
	<!-- <form class="form" id="form" action="" method="post" enctype="multipart/form-data"> -->
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img src="{{ asset('_asset/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm mới</h6>
				</div>
			    <ul class="tabs" style="margin:1px;">
	                <li><a href="#tab1">Thông tin chung</a></li>
				</ul>
				<div class="tab_container">
				    <div id='tab1' class="tab_content pd0">
				        <div class="formRow">
							<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input name="name" id="param_name" _autocheck="true" type="text" value="{{ old('name') }}" style="width:200px;height:28px;font-size:14px;"/>
								</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									@if($errors->has('name'))
										{{ $errors->first('name') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_name">Danh mục:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input name="" id="param_name" _autocheck="true" type="text" value="{{ $categories->name }}" style="width:200px;height:28px;font-size:14px;color:black;" disabled/>
									<input name="cate_id" id="param_name" _autocheck="true" type="hidden" value="{{ $categories->id }}" style="width:200px;"/>
								</span>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow hide"></div>
					</div>
	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input type="submit" onclick="insertFilter()" id="insert" value="Thêm mới" class="redB" />
	       		</div>
	    		<div class="clear"></div>
			</div>
		</fieldset>
<!-- </form> -->


<!-- list -->
<div class="widget" id='main_product'>
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách</h6>
			<div class="num f12"> <b></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ asset('_asset/images/icons/tableArrows.png') }}" /></td>
					<td>Tên: </td>
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_products">
				<tr>
					<td colspan="9">
					    <div class="list_action itemActions">
							<a href="" id="submit" class="button blueB" url="">
								<span style='color:white;'>Xóa các checkbox đã chọn</span>
							</a>
						</div>
							
					    <div class='pagination'>
			            </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
				@foreach($filters as $filter)
					    <tr class='row_'>
					        <td><input type="checkbox" name="id[]" value="" /></td>
							<td>{{ $filter->name }}</td>  
							<td class="option">
								<form action="{{ route('filter.destroy',$filter->id) }}" method="POST" accept-charset="utf-8">
									{!! csrf_field() !!}
									{!! method_field('DELETE') !!}
									<a href="{{ route('elementfilter.show',$filter->id) }}" title="Xem chi tiết sản phẩm" class="tipS button greenB" style="padding:5px;">
										<img src="{{ asset('_asset/images/icons/color/view.png') }}" />
									</a>
									<a href="{{ route('get.create.elementfilter',$filter->id) }}" title="Thêm" class="tipS button greenB" style="padding:5px;">
										<img src="{{ asset('_asset/images/icons/control/16/add.png') }}" />
									</a>
									<a href="{{ route('filter.edit',$filter->id) }}" title="Chỉnh sửa" class="tipS button blueB" style="padding:5px;">
										<img src="{{ asset('_asset/images/icons/color/edit.png') }}" />
									</a>
									<button title="Xóa" class="tipS button redB" onclick="return confirm('Hãy cân nhắc trước khi xóa, bởi nó có thể làm thay đổi hệ thống của bạn.');" style="margin-top: -9px;padding:5px;">
										<img src="{{ asset('_asset/images/icons/color/delete.png') }}"/>
									</button>
								</form>
							</td>
						</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('js')
	<script type="text/javascript">
		(function($)
		{
			$(document).ready(function()
			{
				var main = $('#form');
				
				// Tabs
				main.contentTabs();
			});
		})(jQuery);
	</script>

	<script>
		
		function insertFilter(){
			var name = $('input[name=name]').val();
			var token = $('input[name=_token').val();
			var cate_id = $('input[name=cate_id]').val();
			$.ajax({
				url  : '{{ route('filter.store') }}',
				data : {'name' : name, '_token' : token, 'cate_id' : cate_id},
				type : 'POST',
				success:function(data){
					 window.location.reload();
				}
			});
		}
	</script>

@endsection

@section('css')
	<style type="text/css">
		.form input[type=number] {
		    font-size: 11px;
		    padding: 7px 6px;
		    background: white;
		    border: 1px solid #DDD;
		    width: 100%;
		    font-family: Arial, Helvetica, sans-serif;
		    box-shadow: 0 0 0 2px #f4f4f4;
		    -webkit-box-shadow: 0 0 0 2px #f4f4f4;
		    -moz-box-shadow: 0 0 0 2px #f4f4f4;
		    color: #656565;
		}	
		span.one {
		    width: 37%;
		    display: table-cell;
		    vertical-align: middle;
		    line-height: 25px;
		}
	</style>
@endsection

