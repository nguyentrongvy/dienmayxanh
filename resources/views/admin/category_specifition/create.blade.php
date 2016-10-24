
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
	<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
		{{ method_field('POST') }}
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img src="{{ asset('_asset/images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm mới Sản phẩm</h6>
				</div>
			    <ul class="tabs" style="margin:1px;">
	                <li><a href="#tab1">Thông tin chung</a></li>
	                <li><a href="#tab3">SEO Onpage</a></li>
				</ul>
				<div class="tab_container">
				    <div id='tab1' class="tab_content pd0">
				    	
				        <div class="formRow">
							<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input name="name" id="param_name" _autocheck="true" type="text" value="{{ old('name') }}" style="width:400px;"/>
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
							<label class="formLeft" for="param_name">Chọn danh mục:<span class="req">*</span></label>
							<div class="formRight">
								<select name="cate_id">
								<option value="0">- TOP -</option>
									<?php show_menu_select($categories) ?>
								</select>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow hide"></div>
					</div>

					<div id='tab3' class="tab_content pd0" >
						<div class="formRow">
							<label class="formLeft" for="param_site_title">Title:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="set_title" id="param_site_title" _autocheck="true" rows="4" cols="50">{{ old('set_title') }}</textarea></span>
								<span name="site_title_autocheck" class="autocheck"></span>
								<div name="site_title_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_meta_desc">Meta description:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_desc" id="param_meta_desc" _autocheck="true" rows="4" cols="80">{{ old('meta_desc') }}</textarea></span>
								<span name="meta_desc_autocheck" class="autocheck"></span>
								<div name="meta_desc_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_meta_key">Meta keywords:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_key" id="param_meta_key" _autocheck="true" rows="4" cols="80">{{ old('meta_key') }}</textarea></span>
								<span name="meta_key_autocheck" class="autocheck"></span>
								<div name="meta_key_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
					    <div class="formRow hide"></div>
					</div>
					
	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input type="submit" value="Thêm mới" class="redB" />
	       			<!-- <input type="reset" value="Hủy bỏ" class="basic" /> -->
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

