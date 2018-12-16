@extends('layouts.app')
@section('title',$data['settings'][0]->site_name_en)
@section('keywords',$data['settings'][0]->keywords_en)
@section('description',$data['settings'][0]->description_en)
@section('phone',$data['settings'][0]->phone)
@section('address',$data['settings'][0]->adress_en)
@section('mail',$data['settings'][0]->mail)
@section('facebook',$data['settings'][0]->facebook)
@section('instagram',$data['settings'][0]->instagram)
@section('content')


  <!-- //Header Container  -->



  <!-- Main Container  -->
  <div class="main-container  layout-boxed">
    <div class="container">
    <div class="row">
      <div id="content-top" class="clearfix" >
        <div id="so-slideshow" class="col-lg-9 col-md-9 home-slidershow">
          <div class="module slideshow no-margin">
            <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
              @foreach($data['sliders'] as $slider)
              <div class="yt-content-slide">
                <a href="{{$slider->link}}"><img src="{{$slider->content}}" alt="slider1" class="img-responsive"></a>
              </div>
              @endforeach
            </div>
            <div class="loadeding"></div>
          </div>

        </div>


        <div class="col-lg-3 col-md-3">
          <div class="module  hidden-sm hidden-xs">
            <div class="modcontent clearfix">
              <ul class="htmlcontent-home">

                @foreach($data['banners'] as $banner)
                @if($banner->place =='0')
                <li class="marginbottom__3x">
                  <div class="banners">
                    <div>
                      <a href="{{$banner->link}}"><img src="{{$banner->content}}" alt="banner1"></a>
                    </div>
                  </div>
                </li>
                @endif
                @endforeach
              </ul>

            </div>
          </div>
        </div>

        <div class="module extraslider-home5 titleLine">
          <h3 class="modtitle">Categoreies</h3>
          <div id="so_extraslider_1" >
            <!-- Begin extraslider-inner -->
            <div class="so-extraslider products-list grid product-style__5"  data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
              <!--Begin Items-->

              @foreach($data['menus'] as $menu)
              <div class="ltabs-item product-layout">
                <div class="product-item-container">
                  <div class="left-block">
                    <div class="product-image-container second_img ">
                      <img src="image/demo/cms/home5/banner4.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                    </div>
                    <!--Sale Label-->
                    <!--full quick view block-->
                    <a class="quickview  visible-lg" href="{{$menu->name_en}}">View Category</a>
                    <!--end full quick view block-->
                  </div>
                  <div class="right-block">
                    <div class="caption">
                      <h4><a href="{{$menu->name_en}}">{{ucfirst($menu->name_en)}}</a></h4>
                    </div>
                  </div><!-- right block -->
                </div>
              </div>
              @endforeach
              <!--End Items-->
            </div>
            <!--End extraslider-inner -->
          </div>
        </div>

        <div class="banner2-id10 clearfix">
          <div class="module clearfix">
            <ul class="blank">

              @foreach($data['banners'] as $banner)
              @if($banner->place =='1')
              <li class="col-md-4 col-sm-4 hidden-xs">
                <div class="banners">
                  <div>
                    <a title="Static Image" href="{{$banner->link}}"><img src="{{$banner->content}}" alt="Image"></a>
                  </div>
                </div>
              </li>
              @endif
              @endforeach

            </ul>
          </div>
        </div>
      </div>


      <div id="content" class="clearfix">
        <div class="col-xs-12 clearfix">
          <div class="module extraslider-home5 titleLine">
            <h3 class="modtitle">New Arrivals</h3>
            <div id="so_extraslider_1" >
              <!-- Begin extraslider-inner -->
              <div class="so-extraslider products-list grid product-style__5"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                <!--Begin Items-->




                @foreach($data['products'] as $product)


                <div class="ltabs-item product-layout">
                  <div class="product-item-container">
                    <div class="left-block">
                      <div class="product-image-container second_img ">
                        <img src="{{$product->path}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                      </div>
                      <!--Sale Label-->
                      <span class="label label-new">new</span>
                      <!--full quick view block-->
                      <a class="quickview  visible-lg" href="/product/{{$product->product_slug_en}}">View Product</a>
                      <!--end full quick view block-->
                    </div>
                    <div class="right-block">
                      <div class="caption">
                        <h4><a href="/product/{{$product->product_slug_en}}">{{$product->product_name_en}}</a></h4>
                        <?php $session_currency=Session::get('session_currency');
                        switch ($session_currency) {
                          case '$':
                            $pricetype='$';
                            $price=$product->price_dolar;

                            break;
                            case '€':
                              $pricetype='€';
                              $price=$product->price_euro;
                              $soldprice=$product->sold_price_euro;
                              break;
                              case 'kr':
                                $pricetype='kr';
                                $price=$product->price_kron;

                                break;

                          default:
                          $pricetype='$';
                          $price=$product->price_dolar;

                            break;
                        } ?>

                        <div class="price">

                          <span class="price-new">{{$pricetype}}{{$price}}</span>


                        </div>
                      </div>

                    </div><!-- right block -->
                  </div>
                </div>

                @endforeach
                <!--End Items-->


              </div>
              <!--End extraslider-inner -->
            </div>
          </div>
          <div class="banner2-id10 clearfix">
            <div class="module clearfix">
              <ul class="blank">
                @foreach($data['banners'] as $banner)
                @if($banner->place =='2')
                <li class="col-md-4 col-sm-4 hidden-xs">
                  <div class="banners">
                    <div>
                      <a title="Static Image" href="{{$banner->link}}"><img src="{{$banner->content}}" alt="Image"></a>
                    </div>
                  </div>
                </li>
                @endif
                @endforeach
              </ul>
            </div>
          </div>
          </div>




        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- //Main Container -->
  <!-- Block Spotlight2  -->

  <!-- //Block Spotlight3  -->

@endsection
