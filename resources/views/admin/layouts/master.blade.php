<!DOCTYPE>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<title>@yield('head.title')</title>
	<meta name="robots" content="noindex, nofollow" />
	<link rel="shortcut icon" href="{{ asset('_asset/images/icon.png') }}" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('_asset/crown/css/main.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('_asset/css/css.css') }}" media="screen" />
	<script type="text/javascript" src="{{ asset('_asset/js/jquery-3.1.0.min.js') }}"></script>
	<script type="text/javascript">
        var baseURL = "{!! asset('/') !!}";
    </script>
    <style type="text/css" media="screen">
    	body{
    		font-size: 14px;
    	}
    	ul.pagination {
    		display: flex;
    	}
    	ul.pagination li.active span, ul.pagination li.disabled span {
    		background: #FFF;
		    border: 1px solid #c4c4c4;
		    border-radius: 2px;
		    box-shadow: 0 1px 0 #eaeaea, 0 1px 0 #ffffff inset;
		    color: #717171;
		    display: inline-block;
		    float: left;
		    font-weight: 700;
		    line-height: 25px;
		    margin-right: 4px;
		    min-height: 25px;
		    padding: 0 10px;
		    text-decoration: none;
    	}
    	.error{
			font-size: 14px;
		}
    </style>	
	@yield('css')
	@stack('style')
</head>

<body>
	
	<!-- Left side content -->
	<div id="left_content">
		<div id="leftSide" style="padding-top:30px;">
		
		    <!-- Account panel -->
			
		<div class="sideProfile">
			<a href="#" title="" class="profileFace"><img width="40" src="{{asset('_asset/images/user.png')}}" /></a>
			<span>Xin chào: <strong></strong></span>
			<span></span>
			<div class="clear"></div>
		</div>
		<div class="sidebarSep"></div>		    
				    <!-- Left navigation -->
					
		<ul id="menu" class="nav">
			<li class="home" >
				<a href="">
					<span>Bảng điều khiển</span>
					<strong></strong>
				</a>
			</li>
			<li class="content">
				<a  class="" >
					<span>Quản lý sản phẩm</span>
					<strong></strong>
				</a>

				<ul class="sub">
					<li>
						<a href="{{ route('product.index') }}">Danh sách:</a>
					</li>
				</ul>

			</li>

			<li class="support">
				<a  class="exp inactive">
					<span>Category</span>
					<strong></strong>
				</a>
			
				<ul class="sub">
					<li>
						<a href="{{ route('category.index') }}">Danh sách</a>
					</li>
				</ul>
			</li>

			<li class="support">
				<a  class="exp inactive">
					<span>Filter</span>
					<strong></strong>
				</a>
			
				<ul class="sub">
					<li>
						<a href="{{ route('filter.index') }}">Danh sách</a>
					</li>
					
				</ul>
			</li>
			

			<!-- <li class="support">
				<a  class="exp inactive">
					<span>Danh sách đặt:</span>
					<strong></strong>
				</a>
			
				<ul class="sub">
					<li>
						<a href="">Danh sách</a>
					</li>
					
				</ul>
			</li> -->

			<!-- <li class="content">
				<a class="exp inactive">
					<span>Cấu hình web:</span>
					<strong></strong>
				</a>
				<ul class="sub">
					<li>
						<a href="">Chỉnh sửa:</a>
					</li>
				</ul>
			</li> -->
		</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	
	<!-- Right side -->
	<div id="rightSide">
	    <!-- Account panel top -->
		<div class="topNav">
			<div class="wrapper">
				<div class="welcome">
					<span>Xin chào: <b></b></span>
				</div>
				<div class="userNav">
					<ul>
						
						<li><a href="" >
							<img style="margin-top:7px;" src="" />
							<span>Đổi mật khẩu:</span>
						</a></li>
						
						<!-- Logout -->
						<li><a href="">
							<img src="{{ asset('_asset/images/icons/topnav/logout.png') }}" alt="" />
							<span>Đăng xuất</span>
						</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	    <!-- Main content -->
		<!-- Common -->
<!-- Title area -->
		<div class="titleArea">
			<div class="wrapper">
				<div class="pageTitle">
					<h5>@yield('title')</h5>
					<span>@yield('title.name')</span>
				</div>
				
				<div class="horControlB menu_action">
					<ul>
						@yield('link')
					</ul>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		<div class="line"></div>

<!-- Message -->

<!-- Main content wrapper -->
		

		<div class="wrapper" id="main_product">
			@yield('content')
		</div>


        <div class="clear mt30"></div>
		
	    <!-- Footer -->
	    <div id="footer">
	    	<div class="wrapper">
	        	<div>Copy © 2016 luxury.com</div>
	        </div>
	     </div>
	</div>
	<div class="clear"></div>

	<script type="text/javascript">
		var admin_url 	= '';
		var base_url = "{{ url('/') }}";
		var public_url 	= '';
	</script>

	<script type="text/javascript" src="{{ asset('_asset/js/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/js/jquery/jquery-ui.min.js') }}"></script>


	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/spinner/jquery.mousewheel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/forms/uniform.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/forms/jquery.tagsinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/forms/autogrowtextarea.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/forms/jquery.maskedinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/forms/jquery.inputlimiter.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/tables/datatable.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/tables/tablesort.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/tables/resizable.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.tipsy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.progress.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.timeentry.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.colorpicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.jgrowl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.breadcrumbs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/crown/js/plugins/ui/jquery.sourcerer.js') }}"></script>

	<script type="text/javascript" src="{{ asset('_asset/crown/js/custom.js') }}"></script>


	<script type="text/javascript" src="{{ asset('_asset/js/jquery/chosen/chosen.jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/js/jquery/scrollTo/jquery.scrollTo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/js/jquery/number/jquery.number.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('_asset/js/jquery/zclip/jquery.zclip.js') }}"></script>

	<script type="text/javascript" src="{{ asset('_asset/js/jquery/colorbox/jquery.colorbox.js') }}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('_asset/js/jquery/colorbox/colorbox.css') }}" media="screen" />

	<script type="text/javascript" src="{{ asset('_asset/js/javascript_admin.js') }}" type="text/javascript"></script>
	
	@yield('js')
</body>
</html>
