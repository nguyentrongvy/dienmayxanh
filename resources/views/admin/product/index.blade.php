@extends('admin.layouts.master')
@section('title')
@endsection
@section('title.name')
@endsection
@section('link')
	<li><a href="{{ route('product.create') }}">
		<img src="{{ asset('_asset/images/icons/control/16/add.png') }}" />
		<span>Thêm mới</span>
	</a></li>
@endsection
@section('content')
	<div class="widget" id='main_product'>
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách trang</h6>
			<div class="num f12"> <b></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ asset('_asset/images/icons/tableArrows.png') }}" /></td>
					<td colspan="">Ảnh: </td>
					<td>Tên:</td>
					<td>Giá tiền: </td>
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
					@foreach($products as $product)
					    <tr class='row_'>
					        <td><input type="checkbox" name="id[]" value="" /></td>
							<td width="70"><img src="{{ $product['image'] }}"  width="70" height="80"></td>
							<td>{{ $product->name }}</td>  
							<td>{{ $product->price }}</td> 
							<td class="option">
								<form action="{{ route('product.destroy',$product->id) }}" method="POST" accept-charset="utf-8">
									{!! csrf_field() !!}
									{!! method_field('DELETE') !!}
									<!-- <a href="" title="Xem chi tiết sản phẩm" class="tipS button greenB">
										<img src="{{ asset('images/icons/color/view.png') }}" />
									</a> -->

									<a href="{{ route('product.edit',$product->id) }}" title="Chỉnh sửa" class="tipS button blueB">
										<img src="{{ asset('_asset/images/icons/color/edit.png') }}" />
									</a>
									<button title="Xóa" class="tipS button redB" onclick="return confirm('Hãy cân nhắc trước khi xóa, bởi nó có thể làm thay đổi hệ thống của bạn.');" style="margin-top: -9px;">
										<img src="{{ asset('_asset/images/icons/color/delete.png') }}"/>
									</button>
									<a href="{{ route('get.product.specifition',$product->id) }}">Thông số kỹ thuật</a>
									<a href="{{ $product->properties!='' ? route('get.product.listAttribute',$product->id) : route('get.product.attribute',$product->id) }}">Thuộc tính</a>
								</form>
							</td>
						</tr>
					@endforeach
			</tbody>
		</table>
	</div>
@endsection
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
