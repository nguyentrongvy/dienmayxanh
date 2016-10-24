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
	<form class="form" id="form1" action="" method="post" enctype="multipart/form-data">
		{{ method_field('POST') }}
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img src="{{ asset('_asset/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm thông số kỹ thuật</h6>
				</div>
			    <ul class="tabs" style="margin:1px;">
	                <li><a href="#tab1">Thông tin</a></li>
				</ul>
				<div class="tab_container">
				    <div id='tab1' class="tab_content pd0">
				        <div class="formRow">
							<label class="formLeft" for="param_name1">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input name="name" id="name" _autocheck="true" type="text" value="{{ old('name') }}" style="width:200px;"/>
								</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									<p style="color:red;display:none;font-size:14px;" class="error errorName"></p>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="formRow hide"></div>
					</div>

	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input id="submit" type="submit" value="Thêm mới" class="redB" />
	       			<!-- <input type="reset" value="Hủy bỏ" class="basic" /> -->
	       		</div>
	    		<div class="clear"></div>
			</div>
		</fieldset>
</form>

	<form class="form" id="form1" action="" method="post" enctype="multipart/form-data">
		{{ method_field('POST') }}
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img src="{{ asset('_asset/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Danh sách các thông số kỹ thuật</h6>
				</div>
				<div class="tab_container">
				    <div id='tab2' class="tab_content pd0">
					        <div class="formRow">
								<div class="formRight">
									<span class="oneTwo">
										<input type="checkbox" name="search" class="choosed" id="choosed"  value="">
									</span>
									<span>
										<form action="" method="POST" accept-charset="utf-8">
											{!! csrf_field() !!}
											{!! method_field('DELETE') !!}
											<a href="" title="Chỉnh sửa" class="tipS button blueB"  style="padding:5px;">
												<img src="{{ asset('_asset/images/icons/color/edit.png') }}" />
											</a>
											<button  style="padding:5px;" title="Xóa" class="tipS button redB" onclick="return confirm('Hãy cân nhắc trước khi xóa, bởi nó có thể làm thay đổi hệ thống của bạn.');">
												<img src="{{ asset('_asset/images/icons/color/delete.png') }}" />
											</button>
										</form>
									</span>
								</div>
								<div class="clear"></div>
							</div>
						<div class="formRow hide"></div>
					</div>
	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input id="submitForm" type="submit" value="Thêm mới" class="redB" />
	       		</div>
	    		<div class="clear"></div>

			</div>
		</fieldset>
</form>

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
	<?php 
		function show_menu_select($menu,$parent_id = 0,$chuoi = '---')
		{
			foreach($menu as $key => $item)
			{
				if($item['parent_id'] == $parent_id)
				{
					unset($menu[$key]);
					echo '<option value="'.$item['id'].'">'.$chuoi.$item['name'].'</option>';
					if($menu){
						show_menu_select($menu, $item['id'],$chuoi.'---');
					}
				}
			}
		}
	?>
	</script>

	<script>
		$(function(){
			$('#submit').click(function(e){
				e.preventDefault();
				var name = $('#name').val();
				var token = $('input[name=_token').val();
				$.ajax({
					url : '{{ route('specifition.store') }}',
					data: {'name' : name, '_token' : token},
					type: 'POST',
					success:function(data){
						if(data == 'Ok'){
							window.location.reload();
						}else{
							if(data.error = true)
							{
								if(data.message.name != undefined)
								{
									$('.errorName').show().text(data.message.name[0]);
								}
							}
						}
					}
				});
			});

			$('#submitForm').click(function(e){
				e.preventDefault();
				
			});

		});
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

