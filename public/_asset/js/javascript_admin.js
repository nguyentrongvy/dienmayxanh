(function($)
{
	$(document).ready(function()
	{
		var $list_action 	= $('.list_action');//tim toi the co class = list_action
		$list_action.find('#submit').click(function(){ //tim toi the co id = submit,su kien click
			if(!confirm('Bạn chắc chắn muốn xóa tất cả dữ liệu ?'))
			{
				return false;
			}
			
			var ids = new Array();
			$('[name="id[]"]:checked').each(function()
			{
				//Phương thức array push() trong Javascript thêm một hoặc nhiều phần tử 
				//tới phần cuối của một mảng và trả về độ dài mới của mảng.
				ids.push($(this).val());
			});
			
			if (!ids.length) return false;
			
			//link xoa du lieu
		    var url  = $(this).attr('url');
			
			$.ajax({
				url: url,
				type: 'POST',
				data : {'ids': ids, '_token': $('input[name=_token]').val()},
				success: function()
				{
					//Thực hiện một hành động cho mỗi phần tử, mỗi lần thực hiện một phần tử, để
					// làm được điều này ta cần sử dụng phương thức $(this).
					$(ids).each(function(id, val)
					{
						$('tr.row_'+val).fadeOut();			
					});
				}
			})
			return false;
		});

	});
})(jQuery);


