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
                      <?php foreach($categories as $item){ 
                          if($item['parent_id'] == 0) {
                        echo '<li>';
                        echo '<a href="">'.$item['name'].'</a>';
                             $count_cate = App\Categories::where('parent_id',$item['id']);
                              if($count_cate->count() > 0)
                              {
                                subMenu($categories,$item["id"]); 
                              }
                        echo '</li>';
                         } 
                              } 
                      ?>
                  <?php
                      function subMenu($data,$id){
                          echo "<ul class='dropdown-menu'>";
                              foreach($data as $item){
                                  if($item['parent_id'] == $id){
                                      echo '<li><a href="'.route('get.list.product',$item['id']).'">'.$item["name"].'</a>';
                                          subMenu($data,$item["id"]);
                                      echo '</li>';
                                  }
                              }
                          echo "</ul>";
                      }
                  ?>

                  <!-- <li class=""><a href="adver.html">KHUYẾN MÃI </a></li>
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
                  </li> -->
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
       </div>
</header>