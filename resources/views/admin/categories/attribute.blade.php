@extends('admin.layouts.master')
@section('title')
@endsection
@section('title.name')
@endsection
@section('link')
	<li><a href="">
		<img src="{{ asset('_asset/images/icons/control/16/add.png') }}" />
		<span>Thêm mới</span>
	</a></li>
@endsection
@section('content')
	<div class="widget" id='main_product'>
		<div class="title">
			<h6>Danh sách trang</h6>
			<div class="num f12"> <b></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">

			<thead>
				<tr>
					<td>Tên: </td>
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tbody>
					<?php show_menu_select($categories) ?>
			</tbody>

		</table>
	</div>
@endsection

@section('js')
	<?php
		function show_menu_select($menu,$parent_id = 0,$chuoi = '---')
		{
			foreach($menu as $key => $item)
			{
				if($item['parent_id'] == $parent_id)
				{
					unset($menu[$key]);
					echo "<tr class='row_'>";
						echo "<td>".$chuoi.$item['name']."</td>";
						echo "<td class='option'>";
							echo "<a href='".route('get.create.filter',$item['id'])."'>Thêm</a>";
							echo "<br>";
							echo "<br>";
							echo "<a class='btn btn-success' href='".route('filter.show',$item['id'])."'>xem chi tiết</a>";
						echo "</td>";
					echo "</tr>";
					if($menu)
					{
						show_menu_select($menu, $item['id'],$chuoi.'---');
					}
				}
			}
		}
	?>
@stop

@section('css')
	<style type="text/css">
		.taskWidget td {
			text-align: left;
		}
		.taskWidget td.option {
		    text-align: center;
		}
		.tipS {
			padding: 5px 10px;
		}
		.alert {
			padding: 10px;
			color: #FFF;
		}
		.alert-success {
			background: #3672a0;
		}
		.alert-error {
			background: #9f352b;
		}
		.sale {
			border-radius: 100%;
			background: #337ab7;
			color: #FFF;
			padding: 7px;
			font-size: 12px;
		}
		.unlink {
			text-decoration: line-through;
    		color: #E22B2B;
    		font-size: 11px;
		}
	</style>
@stop
