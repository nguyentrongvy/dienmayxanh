<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	  <title>Thiết kế web</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/css.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="style/css.css"> -->
    <!-- response -->
    <link href="{{asset('home/responsemenu/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- end response menu -->
</head>
<body>
<header>
	<div class="wrap-main">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xm-12">
                    <a href="#"><img src="{{asset('home/images/dienmay1.png')}}"></a>
                </div>
                <div class="col-md-5 col-sm-4 col-xm-12 callcenter">
                    <div class="row">
                      <div class="col-md-5"><span>TỔNG ĐÀI: </span><span>1800.1061</span><span> Miễn phí</span></div>
                      <div class="col-md-6"><a href="">XEM HỆ THỐNG 144 SIÊU THỊ</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xm-12 search" style="">
                    <form>
                        <input type="text" placeholder="Bạn tìm gì..." style="width:74%;"><button type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
      </div>
   </div>
   <div class="menu">
          <nav class="navbar navbar-default">
            <div class="container-fluid menu-header">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Brand</a> -->
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class=""><a href="adver.html">KHUYẾN MÃI </a></li>
                  <li><a href="">BÌNH NƯỚC NÓNG <span class="caret"></a>
                      <ul class="dropdown-menu">
                      <li><a href=""> - Bình Nước nóng Ariston</a></li>
                      <li><a href=""> - Bình Nước Nóng Picenza</a></li>
                      <li><a href=""> - Bình Nước Nóng Midea</a></li>
                      <li><a href=""> - Bình Nước Nóng Electrolux</a></li>
                    </ul>
                  </li>
                  <li><a href="">ĐIỀU HÒA <span class="caret"></a>
                      <ul class="dropdown-menu">
                      <li><a href=""> - Điều Hòa Panasonic</a></li>
                      <li><a href=""> - Điều Hòa Daikin</a></li>
                      <li><a href=""> - Điều Hòa Midea</a></li>
                      <li><a href=""> - Điều Hòa Gree</a></li>
                      <li><a href=""> - Điều Hòa Mitsubishi Heavy</a></li>
                    </ul>
                  </li>
                  <li><a href="">DỤNG CỤ CẦM TAY<span class="caret"></a>
                    <ul class="dropdown-menu">
                      <li><a href=""> - Dụng Cụ Cầm Tay Bosch</a></li>
                      <li><a href=""> - Linh Kiện Bosch</a></li>
                      <li><a href=""> - Dụng Cụ Cầm tay Silk</a></li>
                    </ul>
                  </li>
                  <li><a href="">MÁY SƯỞI</a></li>
                  <li><a href="">QUẠT CẮT GIÓ</a></li>
                  <li><a href="">ĐỒ GIA DỤNG<span class="caret"></a>
                      <ul class="dropdown-menu">
                      <li><a href=""> - Bếp Ga</a></li>
                      <li><a href=""> - Bếp Từ</a></li>
                      <li><a href=""> - Bếp Hồng Ngoại</a></li>
                      <li><a href=""> - Quạt Trần</a></li>
                      <li><a href=""> - Quạt Cây</a></li>
                      <li><a href=""> - Quạt Bàn</a></li>
                      <li><a href=""> - Bình Thủy Điện</a></li>
                      <li><a href=""> - Cây nước Nóng Lạnh</a></li>
                      <li><a href=""> - Lò Nướng</a></li>
                      <li><a href=""> - Lò Vi Sóng</a></li>
                      <li><a href=""> - Máy Hút Bụi</a></li>
                      <li><a href=""> - Máy Say Sinh Tố</a></li>
                      <li><a href=""> - Nồi Cơm Điện</a></li>
                      <li><a href=""> - Bình Đun Siêu Tốc</a></li>
                      <li><a href=""> - Bình Nước</a></li>
                      <li><a href=""> - Bộ Nồi</a></li>
                      <li><a href=""> - Bộ Chảo Chống Dính</a></li>
                      <li><a href=""> - Bộ Đồ Dùng Nhà Bếp</a></li>
                      <li><a href=""> - Máy Ép Trái Cây</a></li>
                      <li><a href=""> - Pin</a></li>
                      <li><a href=""> - Điện Thoại Bàn</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
       </div>
</header>
<section class="slider">
        <div class="container-fluid" style="padding:0;">
          <div class="row">
            <div class="col-xs-12 col-md-8 col-sm-8" style="max-height:340px;">
                  <div id="home-slideshow" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#home-slideshow" data-slide-to="0" class="active"></li>
                            <li data-target="#home-slideshow" data-slide-to="1"></li>
                            <li data-target="#home-slideshow" data-slide-to="2"></li>
                            <li data-target="#home-slideshow" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <a href=""><img class="image" src="{{asset('home/images/slider1.png')}}" alt="bla bka kba"></a>
                              <div class="carousel-caption">
                              </div>
                            </div>
                            <div class="item">
                              <a href=""><img class="image" src="{{asset('home/images/slider2.jpg')}}" alt="bla bka kba"></a>
                              <div class="carousel-caption">
                              </div>
                            </div>
                            <div class="item">
                              <a href=""><img class="image" src="{{asset('home/images/slider3.jpg')}}" alt="bla bka kba"></a>
                              <div class="carousel-caption">
                              </div>
                            </div>
                            <div class="item">
                              <a href=""><img class="image" src="{{asset('home/images/slider4.png')}}" alt="bla bka kba"></a>
                              <div class="carousel-caption">
                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#home-slideshow" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#home-slideshow" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
            </div>
            <div class="col-xs-12 col-md-4 col-sm-12" style="height:330px;background:#0D7BB5;">
              <div class="row" style="height:100%;">
                <div class="col-md-12"><h3 style="color:#fff;">MỪNG KHAI TRƯƠNG SIÊU THỊ ĐIỆN MÁY XANH</h3></div>
                <div class="col-md-12"><h4 style="text-transform: uppercase;color:#fff;">Số 07 Lê Duẩn, P. Hải Châu 1, Q. Hải Châu, Tp. Đà Nẵng</h4></div>
                <div class="col-md-12"><h5 style="color:#fff;">Khai trương ngày: <span>01/01/2016</span></h5></div>
              </div>
            </div>
          </div>
        </div>
</section>
<section class="product">
        <div class="container-fluid " style="border-bottom: 4px solid #f1f1f1;">
            <div class="row list-tivi">
                <div class="col-xs-12 col-md-4 col-sm-6 tivi">
                    <a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
                    <div style="margin-left:28px;">
                      <div class="row">
                          <div class="col-md-4">
                              <img src="{{asset('home/images/Samsung-s.png')}}">
                          </div>
                          <div class="col-md-8">
                              <span class="hot">
                                <b>43"</b>
                                <b>Smart TV</b>
                              </span>
                          </div>
                      </div>
                      <div class="price">
                          <strong>11.000.000 <span>VND</span></strong>
                      </div>
                      <div class="promo">
                          Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
                          Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
                      </div>
                    </div>
                    </a>  
               </div>
               <div class="col-xs-12 col-md-4 col-sm-6 tivi">
                    <a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
                    <div style="margin-left:28px;">
                      <div class="row">
                          <div class="col-md-4">
                              <img src="{{asset('home/images/Samsung-s.png')}}">
                          </div>
                          <div class="col-md-8">
                              <span class="hot">
                                <b>43"</b>
                                <b>Smart TV</b>
                              </span>
                          </div>
                      </div>
                      <div class="price">
                          <strong>11.000.000 <span>VND</span></strong>
                      </div>
                      <div class="promo">
                          Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
                          Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
                      </div>
                    </div>
                    </a>  
               </div>
               <div class="col-xs-12 col-md-4 col-sm-6 tivi">
                    <a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
                    <div style="margin-left:28px;">
                      <div class="row">
                          <div class="col-md-4">
                              <img src="{{asset('home/images/Samsung-s.png')}}">
                          </div>
                          <div class="col-md-8">
                              <span class="hot">
                                <b>43"</b>
                                <b>Smart TV</b>
                              </span>
                          </div>
                      </div>
                      <div class="price">
                          <strong>11.000.000 <span>VND</span></strong>
                      </div>
                      <div class="promo">
                          Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
                          Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
                      </div>
                    </div>
                    </a>  
               </div>
            </div>
            <div class="row" style="margin-bottom:5px;">
              <div class="col-md-10">
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                  <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
                <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                </div>
              </div>
              <div class="col-xs-12 col-md-2 col-sm-2">
                  <a href="" class="btn btn-info">Xem thêm</a>
              </div>
            </div>
        </div>

        <div class="container-fluid" style="border-bottom: 4px solid #f1f1f1;">
            <div class="row list-tool" style="margin-bottom:15px;">
                <a href=""><h3>MÁY LẠNH - TỦ LẠNH - MÁY GIẶT</h3></a>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                               <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom:5px;">
                                    <img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
                                </div>
                                <div class="col-md-6">
                                    <span class="hot">
                                      <b>1 HP</b>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                            <div class="promo">
                                3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row" style="margin-bottom:5px;">
                <div class="col-md-10">
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi</a>
                  </div>
              </div>
              <div class="col-xs-12 col-md-2 col-sm-2">
                  <a href="#" class="btn btn-info">Xem thêm</a>
              </div>
            </div>
        </div>

         <div class="container-fluid"  style="border-bottom: 4px solid #f1f1f1;">
            <div class="row phone" style="margin-bottom:15px;">
                <a href=""><h3>ĐIỆN THOẠI - MÁY TÍNH BẢNG - LAPTOP</h3></a>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;font-size:20px;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                               <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                               <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-2 col-sm-4" style="border: 1px solid #f1f1f1;padding:15px;padding-left:6px;">
                    <a href="detail.html">
                        <img src="{{asset('home/images/Samsung-s.png')}}" style="height:20px;">
                        <img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
                        <div class="">
                            <span>
                                <span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
                            </span>
                            <div class="price" style="font-weight: bold;">
                                <strong>11.000.000 <span>VND</span></strong>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row"  style="margin-bottom:5px;">
                <div class="col-md-10">
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                    <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi Sony</a>
                  </div>
                  <div class="col-xs-12 col-md-1 col-sm-2">
                      <a href="#">Tivi</a>
                  </div>
              </div>
              <div class="col-xs-12 col-md-2 col-sm-2">
                  <a href="#" class="btn btn-info">Xem thêm</a>
              </div>
            </div>
         </div>
  </section>

<footer>
      <div class="container-fluid">
          <div class="row wrap_footabout" style="border-top:2px solid #000;border-bottom:2px solid #fff;">
              <div class="col-md-3 info">
                  <h3 style="">Thông Tin Công Ty</h3>
                  <div><a href="">Giới thiệu về Điện máy XANH</a></div>
                  <div><a href="">Hệ thống các siêu thị</a></div>
                  <div><a href="">Tuyển dụng</a></div>
              </div>
              <div class="col-md-3 info">
                  <h3>Hỗ Trợ Khách Hàng</h3>
                  <div><a href="">Liên hệ và góp ý</a></div>
                  <div><a href="">Hướng dẫn mua hàng online</a></div>
                  <div><a href="">Hướng dẫn mua trả góp</a></div>
                  <div><a href="">Bán hàng doanh nghiệp</a></div>
                  <div><a href="">Bảo mật thông tin</a></div>
                  <div><a href="">Hướng dẫn thanh toán</a></div>
                  <div><a href="">Chất lượng phục vụ</a></div>
                  <div><a href="">Hướng dẫn trao thưởng</a></div>
              </div>
              <div class="col-md-3 info">
                  <h3>Chính Sách Mua Hàng</h3>
                  <div><a href="">Chính sách bảo hành - đối trả</a></div>
                  <div><a href="">Tra cứu thông tin bảo hành</a></div>
                  <div><a href="">Giao hàng và lắp đặt</a></div>
              </div>
              <div class="col-md-3 info">
                  <h3>Tổng Đài Hỗ Trợ (Gọi Miễn Phí)</h3>
                  <div>Mua hàng: 1800.1061 (7:30 - 22:00)</div>
                  <div>Bảo hành: 1800.1065 (8:00 - 21:00)</div>
                  <div>Khiếu nại: 1800.1063 (8:00 - 21:30)</div>
              </div>
          </div>
          <div class="row" style="border-bottom:2px solid #fff;margin-bottom:15px;height: 50px;line-height: 50px;">
            <div class="col-md-12">
              <span>Bạn có thể thanh toán với: 
                  <span style="margin-left:20px;"><img src="{{asset('home/images/visa.png')}}"></span>
              </span>
            </div>
          </div>
          <div class="row partner" style="border-bottom:2px solid #fff;">
              <div class="col-md-2">Các đối tác lớn: </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_2.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_3.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_4.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_5.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_6.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_7.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_8.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_1.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_10.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_12.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_12.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_12.png')}}">
              </div>
              <div class="col-md-1 partner-image">
                  <img src="{{asset('home/images/partner_12.png')}}">
              </div>
          </div>
          <div class="row">
              <div class="col-md-8">
                  <h4><a href="">Hệ Thống 145 Siêu Thị Điện Máy XANH</a></h4>
                  <div class="row">
                    <div class="col-md-2">Mới khai trương: </div>
                    <div class="col-md-10">  Số 34, Tổ 2, Khu Xuân Hà, TT. Xuân Mai, H. Chương Mỹ, Tp. Hà NộiSố 1046 Nguyễn Trung Trực, KP 4, P. An Hòa, TP. Rạch Giá, T. Kiên GiangSố 7C Nguyễn Trãi, P. Quán Bầu, TP. Vinh, T. Nghệ An</div>
                  </div>
              </div>
              <div class="col-md-4">
                  <span>Chia sẻ: 
                      <span><img src="{{asset('home/images/facebook1.png')}}" style="width: 33px;height: 33px;"></span>
                      <span><img src="{{asset('home/images/googleplus1.png')}}" style="width: 33px;height: 33px;"></span>
                      <span><img src="{{asset('home/images/Google-plus-icon.png')}}" style="width: 33px;height: 32px;"></span>
                  </span>
              </div>
          </div>
      </div>
  </footer>
  <script src="{{asset('home/js/jquery-3.1.0.min.js')}}"></script>
  <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
  <!-- response menu -->
  <script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.js')}}"></script>
  <script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.bootstrap.js')}}"></script>
  <!-- end response menu -->
</body>
</html>