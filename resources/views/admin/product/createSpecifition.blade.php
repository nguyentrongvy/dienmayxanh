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
				    @foreach($specifications as $specification)
				    	<?php $elementSpecifications = \App\elementSpecification::where('spec_id',$specification['id'])->get(); ?>
				        <div class="formRow">
							<!-- <label class="formLeft" for="param_name1">Tên: <span class="req">*</span></label> -->
							<div class="formRight">
								<span class="oneTwo">
									+ {{ $specification->name }}
								</span>

								@foreach($elementSpecifications as $elementSpecification)
									
									<div class="formRow">
										<label class="formLeft" for="param_name1"><input type="checkbox"></label>
										<!-- <div class="formRight"> -->
											<span class="oneTwo">
												<input type="text" name="" value="{{ $elementSpecification->name }}" /> 
											</span>
										<!-- </div> -->
										<div class="clear"></div>
									</div>

								@endforeach

							</div>
							<div class="clear"></div>
						</div>
					@endforeach
						<div class="formRow hide"></div>
					</div>
	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input id="submit" type="submit" value="Cập nhật" class="redB" />
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

