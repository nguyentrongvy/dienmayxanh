@extends('admin.layouts.master')
@section('title')
@endsection
@section('title.name')
@endsection
@section('link')
	<li><a href="{{ route('category.create') }}">
		<img src="{{ asset('_asset/images/icons/control/16/add.png') }}" />
        <span>Thêm mới</span>
	</a></li>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('_asset/css/css_menu.css') }}" />
@endsection

@section('content')
         <script language="javascript">
             // 
        </script>
        <div id="menu_wrapper">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <hr/><br/>
            <script language="javascript">
	        	var menus = new Array();
	      			<?php foreach($categories as $item) { ?>
	      				menus.push({
	      					'id' : '<?php echo $item['id'] ?>',
	      					'name' : '<?php echo $item['name'] ?>',
	      					'parent_id' : '<?php echo $item['parent_id'] ?>'
	      				});
	      			<?php } ?>
	        </script>
            <?php dequy($categories) ?>
        
            <script>

            	var html = '';

            	function get_parent(menu, parent_id, current_id,current_parent_id,string)
            	{
            		var loop = new Array();
            		var contin = new Array();

            		for(var i = 0;i < menu.length;i++)
            		{
            			if(current_id == menu[i].id || current_id == menu[i].parent_id)
            			{
            				//do notthing
            			}
                        else if(menu[i].parent_id == parent_id )
            			{
            				loop.push(menu[i]);
            			}
            			else{
            				contin.push(menu[i]);
            			}
            		}
            		
            		for(var i = 0;i < loop.length;i++)
            		{
            			html +='<option '+( (current_parent_id == loop[i].id) ? 'selected' : '' )+' value="'+loop[i].id+'">'+string+loop[i].name+'</option>';
            			get_parent(contin,loop[i].id,current_id,current_parent_id,string+"---");
            		}	
            	}

            	$('.click-edit-menu').click(function(){
            		var id= $(this).attr('data-id');
                    var id_parent= $(this).attr('data-parent-id');
            		if($('#menu_parent_id_'+id).attr('data-status') == '0'){
            			html = '<option value="0"> -TOP- </option>';
	            		get_parent(menus,0,id,id_parent, '---');
	            		$('#menu_parent_id_'+id).attr('data-status','1');
	            		$('#menu_parent_id_'+id).html(html);	
            		}    		
            	});

                function edit(menu_id)
                {
                    var data = {
                        menu_id : menu_id,
                        menu_title : $('#menu_title_'+menu_id).val(),
                        menu_link : $('#menu_link_'+menu_id).val(),
                        menu_parent_id : $('#menu_parent_id_'+menu_id).val(),
                        _token : $('input[name=_token]').val()
                    };

                    $.ajax({
                        url: '{{ route('post.edit.category') }}',
                        data : data,
                        type: 'POST',
                        dataType: 'text',
                        success: function(result){
                            window.location.reload();
                            // console.log(result);
                        }
                    });
                }

                function remove(menu_id,parent_id)
                {
                    if(confirm("Bạn có chắc muốn xóa không ? ") == false)
                    {
                        return false;
                    }
                    var data = {
                        menu_id : menu_id,
                        parent_id : parent_id,
                        _token : $('input[name=_token]').val()
                    };

                    $.ajax({
                        url: '{{ route('post.delete.category') }}',
                        data : data,
                        type: 'POST',
                        dataType: 'text',
                        success: function(result){
                           window.location.reload();
                        }
                    });
                }

                $('.redirect').click(function (e) {
                    var link = e.target.href
                    // console.log(link);
                    window.location = link;
                });

            </script>
        </div>

        <?php
		    function dequy($data,$parent_id = 0)
		    {
		        echo '<ul>';
		        foreach($data as $key => $item)
		        {
		            if($item['parent_id'] == $parent_id)
		            {
		                unset($data[$key]);
		                echo '<li>';
		                echo '<a class="click-edit-menu" style="color:black;" data-id="'.$item['id'].'" data-parent-id="'.$item['parent_id'].'" href="#">'.$item['name'].'</a>';
		                echo '<div>';
		                        echo '<table border="0">';
		                            echo '<tr>';
		                                echo '<td>Tên: </td>';
		                                echo '<td><input id="menu_title_'.$item['id'].'" name="" value="'.$item['name'].'" /></td>';
		                            echo '</tr>';
		                            echo '<tr>';
		                                echo '<td>Slug: </td>';
		                                echo '<td><input id="menu_link_'.$item['id'].'" name="" value="'.$item['slug'].'" /></td>';
		                            echo '</tr>';
		                            echo '<tr>';
		                                echo '<td>Parent: </td>';
		                                echo '<td>';
		                                    echo '<select id="menu_parent_id_'.$item['id'].'" style="margin-bottom:2px;" data-status="0"></select><br>';
		                                    echo '<input type="button" name="" class="" style="margin-right:2px;margin-bottom:2px;font-size:12px;" value="SỬA" onclick="edit('.$item['id'].')" />';
                                            echo '<input type="button" name="" class="" value="Delete" style="font-size:12px;margin-right:2px;" onclick="remove('.$item['id'].','.$item['parent_id'].')" />';
                                            echo '<a class="redirect" style="width:82px;color:#000;font-size: 12px;font-weight: bold;float:right;height: 27px;background: #f1f1f1;" href="'.route('get.createIdCate.attribute',$item['id']).'">THUỘC TÍNH</a>';
                                            echo '<a class="redirect" style="width:136px;color:#000;font-size: 12px;font-weight: bold;height: 27px;background: #f1f1f1;" href="'.route('get.create.specifition',$item['id']).'">THÔNG SỐ KỸ THUẬT</a>';
		                                echo '</td>';
		                            echo '</tr>';
		                        echo '</table>';
		                    echo '</div>';
		                if($data){
		                    dequy($data,$item['id']);
		                }
		            echo '</li>';
		            }
		        }
		        echo '</ul>';
		    }
		?>
        
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('_asset/js/js_menu/js.js') }}"></script>
   
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
	</style>
@endsection