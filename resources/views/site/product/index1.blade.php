@extends('site.layouts.master')

@section('head.title')
	<title>Trang chủ</title>
@stop

@section('meta')

@stop

@section('css')

@stop

@section('list.content')
	<section>
  <div class="step" style="margin-bottom:10px;">
      <span><a href=""> Trang chủ ></a></span>
      <span><a href=""> Tivi ></a></span>
      <span>Danh sách</span>
  </div>
    <div class="container-fluid air">
          <div class="row">
              <div class="col-md-9">
                  <div class="row slide">
                    <div class="col-xs-12 col-md-12" style="padding:0;">
                    <div id="home-slideshow" class="carousel slide" data-ride="carousel"  style="">
                        <ol class="carousel-indicators">
                          <li data-target="#home-slideshow" data-slide-to="0" class="active"></li>
                          <li data-target="#home-slideshow" data-slide-to="1"></li>
                          <li data-target="#home-slideshow" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img class="image" src="{{asset('home/images/detail1.jpg')}}" alt="...">
                            <div class="carousel-caption">
                              <h3>sfasd</h3>
                              <p>asdfsf</p>
                            </div>
                          </div>
                          <div class="item">
                            <img class="image" src="{{asset('home/images/fridge3.jpg')}}" alt="...">
                            <div class="carousel-caption">
                              <h3>asdfasdf</h3>
                              <p>asd</p>
                            </div>
                          </div>
                        </div>

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
                      </div>
                      
                  <div class="row"  style="margin-bottom:20px;">
                    @foreach($products as $product)
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{ $product->image }}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;vertical-align: middle;">
                                    <strong>{{ $product->price }}<span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                          <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                    @endforeach
                      <!-- <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-4 col-sm-4 features" style="position:relative;">
                        <a href="" style="">
                            <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                            <div class="features-air" style="">
                                <span> <span style="font-weight: 600;font-size:14px;margin-right:10px;">LG</span>
                                    <span class="" style="color: #4a90e2;font-size:14px;margin-right:10px;font-weight: 600;"><b>1 HP</b></span>
                                    <span class="">(ESM09CRF-D4)</span>
                                </span>
                                <div class="price" style="font-size: 14px;color: #d0021b;    vertical-align: middle;">
                                    <strong>6.000.000 <span>VND</span></strong>
                                </div>
                                <div class="promo">
                                    3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
                                </div>
                            </div>
                        </a>
                        <div style="margin-left:40px;"><button type="button" class="btn btn-warning dropdown-toggle">Mua <span></span></button></div>
                          <div class="para">
                            <span>- Công suất: 1 HP</span>
                            <span>- Máy lạnh thường</span>
                            <span>- Làm lạnh: Dưới 15 m2</span>
                            <span>- Tiết kiệm điện: 2 sao</span>
                            <span>- Sản xuất tại: Trung Quốc</span>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                          </div>
                      </div> -->
                  </div>

                  <div class="row">
                      <div class="col-md-3">
                          <a href="">Máy lạnh Daikin</a>
                      </div>
                      <div class="col-md-3">
                          <a href=""> Máy lạnh Mitsubishi Electric</a>
                      </div>
                      <div class="col-md-3">
                          <a href=""> Máy lạnh Mitsubishi Electric</a>
                      </div>
                      <div class="col-md-3">
                          <a href=""> Máy lạnh Mitsubishi Electric</a>
                      </div>
                      <div class="col-md-3">
                          <a href="">Máy lạnh Daikin</a>
                      </div>
                      <div class="col-md-3">
                          <a href="">Máy lạnh Daikin</a>
                      </div>
                      <div class="col-md-3">
                          <a href="">Máy lạnh Daikin</a>
                      </div>
                      <div class="col-md-3">
                          <a href="">Máy lạnh Daikin</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="row filter">
                    <h4 style="margin-left:5px;"><strong>CHỌN HÃNG</strong></h4>
                        @foreach($companys as $company)
                          <div class="col-md-6">
                            <a href="">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="search" class="choosed" id="choosed" onclick="searchManuFilter('{{ $company['name']}}')" value="{{ $company->name}}"> {{ $company->name}}
                              </label>
                            </a>
                          </div>
                        @endforeach
                </div>

                <div class="row filter">
                    <h4 style="margin-left:5px;"><strong>CHỌN MỨC GIÁ</strong></h4>
                        @foreach($prices as $price)
                          <div class="col-md-6">
                            <a href="">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="search" class="choosed" onclick="searchPrice('{{$price['price_min']}}','{{ $price['price_max'] }}')" id="choosed" value="{{ $price->name}}"> {{ $price->name}}
                              </label>
                            </a>
                          </div>
                        @endforeach
                </div>

                @foreach($filters as $filter)
                  <div class="row filter">
                    <h4 style="margin-left:5px;"><strong>{{ $filter->name }}</strong></h4>
                      <?php $elementfilters = \App\ElementFilter::where('search_id',$filter['id'])->get() ?>
                        @foreach($elementfilters as $elementfilter)
                          <div class="col-md-6">
                            <a href="">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="search" class="choosed" id="choosed" value="{{ $elementfilter->name}}"> {{ $elementfilter->name}}
                              </label>
                            </a>
                          </div>
                        @endforeach
                  </div>
                @endforeach
          </div>
    </div>
</section>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            // $('.choosed').on('change',function(){
            //     $value = $(this).val();
            //     $.ajax({
            //       type : 'GET',
            //       url : '{{URL::to('search')}}',
            //       data : {'search': $value},
            //       success:function(data){
            //         console.log(data);
            //       }
            //     });
            // });
        });

        var manuFilters = [];
        var priceFilters = [];

        function searchManuFilter(value){
            $value = value;
            addOrRemoveManufacture(manuFilters, value);
            $.ajax({
                type : 'GET',
                url  : '{{ URL::to('searchManuFilter') }}',
                data : {'manufactures' : manuFilters, 'prices': priceFilters },
                success:function(data)
                {
                  console.log(data);
                }
            });
        }

        function addOrRemoveManufacture(manufactureArr, manufacture){
          var found = manufactureArr.indexOf(manufacture);
          if(found !== -1){
            manufactureArr.slice(found, 1);
          }else{
            manufactureArr.push(manufacture);
          }
        }

        function searchPrice(price_min,price_max)
        {


            $price_min = price_min;
            $price_max= price_max;
            $.ajax({
                type : 'GET',
                url  : '{{ URL::to('searchPrice') }}',
                data : {'price_min' : price_min , 'price_max' : price_max },
                success:function(data)
                {
                  console.log(data);
                }
            });
        }

        function addOrRemovePrices(priceFilters, priceMin, priceMax){
          var found = -1;
          for(var i =0; i< priceFilters.length; i++){
            var priceObject = priceFilters[i];
            if(priceObject.priceMin === priceMin && priceObject.priceMax === priceMax){
              found = i;
              break;
            }
          }

          if(found === -1){
            priceFilters.push({ priceMin: priceMin, priceMax: priceMax});
          }
          else{
            priceFilters.slice(found, 1);          
          }          
        }
    </script>
@stop