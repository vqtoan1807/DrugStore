<?php
	session_start();
	if(!isset($_SESSION['userinfor'])) {
		header('../../DrugStore-main/Database/Register.php');
		die();
	}
   if(!empty($_POST)) {
		require_once('../../DrugStore-main/Database/dbhelper.php');
	}
    
	$username = null;
	$fullname = '';
	if(isset($_SESSION['userinfor'])) {
		$username = $_SESSION['userinfor'];
		$fullname = $username['hoten'];
	}
?>
 
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to Drugshop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper" style="margin-top: 100px;">
         <div class="header">    
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="../../DrugStore-main/index.html"><img src="images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">News</a></li>
                                 <li><a href="#">Service</a></li>
                                 <li><a href="#">Recruiment</a></li>
                                 <li><a href="#">Media</a></li>
                                 <li><a href="#">Support</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <h2 class="text-center">Welcome <strong><?=$fullname?></strong></h2>
                                 <li><a href="../../DrugStore-main/Database/Logout.php" class="log">????ng xu???t</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart" onmouseover="updateCart()">
                              <a href="#" class="cart-icon">cart <span class="cart_no">0</span></a>
                              <ul class="option-cart-item">
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="images/products/thum/products-01.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">S???n ph???m</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">300.000 VN??</p>
                                          <a href="#" class="remove" onclick="this.parentElement.parentElement.parentElement.remove();alert('???? xo?? item');"><img src="images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="images/products/thum/products-02.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">S???n ph???m</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price" >300.000 VN??</p>
                                          <a href="#" class="remove" onclick="this.parentElement.parentElement.parentElement.remove();"><img src="images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li><span class="total">T???ng c???ng: <strong >600.000 VN??</strong></span><button class="checkout" onClick="location.href='checkout.html'">CheckOut</button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang ch???</a>
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                       <li><a href="../../DrugStore-main/index.html">home1</a></li>
                                       <li><a href="../../DrugStore-main/home2.html">home2</a></li>
                                       <li><a href="../../DrugStore-main/home3.html">home3</a></li>
                                       <li><a href="../../DrugStore-main/productlitst.html">Danh s??ch s???n ph???m 1</a></li>
                                       <li><a href="../../DrugStore-main/productgird.html">Danh s??ch s???n ph???m 2</a></li>
                                       <li><a href="../../DrugStore-main/details.html">Chi ti???t</a></li>
                                       <li><a href="../../DrugStore-main/cart.html">Gi??? h??ng </a></li>
                                       <li><a href="../../DrugStore-main/checkout.html">?????t h??ng</a></li>
                                       <li><a href="../../DrugStore-main/checkout2.html">?????t h??ng</a></li>
                                       <li><a href="../../DrugStore-main/contact.html">Li??n h???</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="../../DrugStore-main/productgird.html">Sale</a></li>
                              <li><a href="../../DrugStore-main/productlitst.html">T?? v???n thu???c </a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">S???ng Kh???e</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="../../DrugStore-main/productgird.html">B???nh th?????ng g???p</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Gia ????nh</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">B???nh m??n t??nh</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">L??m ?????p</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Dinh d?????ng</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Tin t???c </a></li>
                                          </ul>
                                       </div>

                                    </div>
                                 </div>
                              </li>
                              <li><a href="../../DrugStore-main/productgird.html">blog</a></li>
                              <li><a href="../../DrugStore-main/contact.html">Li??n h??? ch??ng t??i</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Ti???t ki???m h??n, s???ng kh???e h??n </span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Sale 2020</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Chung tay b???o v??? s???c kh???e cho c??? gia ????nh b???n.</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                       
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>T?? v???n v??? toa thu???c</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>T??m n??i t?? v???n v?? mua thu???c v???i gi?? t???t, uy t??n. 
                              H??y ????? Pharmacity gi??p b???n!</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>??u ????i l??n ?????n 50%</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>D??nh cho th??nh vi??n c???a EXTRA CARE</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>?????</strong> Xu???t</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">415.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details2.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">577.000VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="../../DrugStore-main/details3.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">135.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details4.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">250.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="../../DrugStore-main/details5.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">100.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details6.html"><img src="images/products/small/products-06.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">300.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="../../DrugStore-main/details7.html"><img src="images/products/small/products-07.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">320.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details8.html"><img src="images/products/small/products-08.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">167.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>S???n ph???m </strong> kh??c</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-09.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">400.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-10.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">312.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-11.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">505.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-12.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">910.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-13.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">168.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-14.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">50.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="images/products/small/products-15.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">760.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-16.png" alt="Product Name"></a></div>
                                 <div class="productname">S???n ph???m 2021</div>
                                 <h4 class="price">56.000 VN??</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Th??m v??o gi???</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Nh??n h??ng </strong> c???a ch??ng t??i</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>17A, Cong Hoa, HCM , Vietnam</p>
                        <p>Call Us : (084) 1234567</p>
                        <p>Email : ahihi@gmail.com</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Pharmacity VN</p>
                        <form class="newsletter">
							<input type="text" name="" placeholder="Type your email....">
							<input type="submit" value="SignUp" class="button">
						</form>
                     </div>   
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright ?? 2012. Designed by <a href="#">KMA</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
     <script type="text/javascript" src="js/cart.js"></script>
   </body>
</html>