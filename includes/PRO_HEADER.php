<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole Mobile </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css?223">
    <link rel="stylesheet" href="css/jquery.mobile.custom.structure.css">
    <!-- <link rel="stylesheet" href="css/jquery.mobile.custom.theme.css"> -->
    <script src="js/modernizr.custom.js"></script>

  </head>
  <body>
    <div class='page-wrapper' data-role="page">

    <!-- filter-products -->
    <div class="filter-products fix-bottom hidden">
      <div class="row">
        <div class="col-xs-6 text-center">
            <a href="#" class="btn-icon text-center btn-grid">  <img class="icon-new" src="images/icons/filter-grid-active.svg" alt="">
            </a>
            <a href="#" class="btn-icon text-center btn-list">  <img class="icon-new" src="images/icons/filter-list.svg" alt="">
            </a>
        </div>
        <div class="col-xs-6">
          <a href="#" class="btn-block text-center">
            <img class="icon-new" src="images/icons/fillter-icon-black.svg" alt="">Filter</a>
        </div>
      </div>
    </div>


  <!-- ad-to-cart -->
    <div class="add-to-cart fix-bottom hidden">
      <div class="row">
        <div class="col-xs-4 text-center">
          <a href="#" class="btn-block text-center">
          Wish list</a>
        </div>
        <div class="col-xs-8">
          <a href="#" class="btn btn-primary btn-block text-center">
          Add to cart</a>
        </div>
      </div>
    </div>

    <div class="filter-grid fix-bottom hidden">
      <div class="row">
        <div class="col-xs-6">
          <a href="#" class="btn-block text-center">Clear all </a>
        </div>
        <div class="col-xs-6">
          <a href="#" class="btn-block text-center">
            <img class="icon-new" src="images/icons/fillter-icon-black.svg" alt="">Filter</a>

        </div>
      </div>
    </div>

<!-- navigation desktop -->

  <div id="desktop-nav">
    <div class="top-bar">
      <div class="container-fluid">
        <div class="col-md-6">
          Free shipping over $99 Learn more
        </div>
        <div class="col-md-6 text-right topNav">
          <a href="#">My account </a>
          <a href="#">Help</a>
          <a href="#"> <img class="icon-new" src="images/icons/cart-icon.svg" alt=""> </a>
          <a href="#">En ></a>
          <a href="#"> <img class="icon-new" src="images/icons/canada-icon.svg" alt=""> </a>
        </div>
      </div>
    </div>
    <div class="mainNav">
      <div class="container-fluid">
        <div class="col-md-3">
           <a href="index.php"><img src="images/sole-white.svg" class="logo" alt="" /></a>
        </div>
        <div class="col-md-7 text-center">
          <ul>
            <li><a href="i#" data-menu= '1'>Store</a></li>
            <li><a href="i#">Reviews</a></li>
            <li><a href="i#">Health</a></li>
            <li><a href="i#">Why Sole</a></li>
          </ul>
        </div>

        <div class="col-md-2 text-right ">
          <div class="search">
            <img class="icon-new" src="images/icons/search-white-icon.svg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="dropdownMenu">
      <div class="container">
        <div class="menu1 menu-panel">
          <div class="col-sm-1">
          </div>
          <div class="col-sm-2 border-right">
            <ul>
              <li><h3><a href="#">FEATURED</a></h3></li>
              <li><h3><a href="#">SHOP ALL</a></h3></li>
              <li><h3><a href="#">GIFT CARD</a></h3></li>
              <li><h3><a href="#">SALE</a></h3></li>
            </ul>
          </div>
          <div class="col-sm-2">
            <ul>
              <li><h3><a href="#">FOOTBEDS</a></h3></li>
              <li><a href="#">Shop all</a></li>
              <li><a href="shopby.php">Shop by</a></li>
              <li><a href="#">Personal shopper</a></li>
            </ul>
          </div>
          <div class="col-sm-2">
            <ul>
              <li><h3><a href="#">FOOTWEAR</a></h3></li>
              <li><a href="#">Men</a></li>
              <li><a href="shopby.php">Shop by</a></li>
              <li><a href="#">Shop all</a></li>
            </ul>
          </div>
          <div class="col-sm-2 border-right">
            <ul>
              <li><h3><a href="#">SOCKS</a></h3></li>
              <li><a href="#">Shop by</a></li>
              <li><a href="#">Shop all</a></li>
            </ul>
          </div>
          <div class="col-sm-3 text-center">
            <h3><img src="http://placehold.it/150x150"></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- navigation  -->
    <nav class="navbar navbar-inverse navbar-fixed-top hidden-md hidden-lg hidden-xl" style="margin-bottom:50px;">
      <div class="container ">
        <div class="navbar-header">

          <a href="#mypanel" class="navbar-toggle"  >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </a>

           <a href="index.php"><img src="images/sole-white.svg" class="logo" alt="" />
            </a>

        </div>

       </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
      <div class="mp-pusher" id="mp-pusher">
        <div data-role="panel" id="mypanel">
              <nav id="mp-menu" class="mp-menu">
                <div class="">
                  <!-- <h2 class="ion-earth">My Account</h2> -->
                  <div class="row grey-bg">
                    <div class="col-xs-12">
                      <div class="col-xs-6">
                        <a href="#" class="btn btn-block btn-lg"> English > </a>
                      </div>
                      <div class="col-xs-6">
                        <a href="#" class="btn btn-block btn-lg"> Canada > </a>
                      </div>
                    </div>
                  </div>
                    <div class="col-xs-12">
                      <div class="col-xs-12">
                        <form class="" action="index.php" method="post">
                          <div class="form-group search-bar">
                            <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Search">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <ul>
                        <li class="ion-chevron-left">
                          <a class="ion-monitor btn-active" href="#">My Account</a>
                          <div class="mp-level">
                            <!-- <h2 class="ion-monitor">My Account</h2> -->
                            <a class="mp-back" href="#">My Account</a>
                            <ul>
                              <li class="ion-chevron-left">
                                <a class="ion-iphone" href="#">Log in</a>
                                <!-- <div class="mp-level">
                                  <h2>Mobile Phones</h2>
                                  <a class="mp-back" href="#">back</a>
                                  <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Store</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Health</a></li>
                                  </ul>
                                </div> -->
                              </li>
                              <li class="ion-chevron-left">
                                <a class="ion-monitor" href="#">Account info</a>
                                <!-- <div class="mp-level">
                                  <h2>Televisions</h2>
                                  <a class="mp-back" href="#">back</a>
                                  <ul>
                                    <li><a href="#">Flat Superscreen</a></li>
                                    <li><a href="#">Gigantic LED</a></li>
                                    <li><a href="#">Power Eater</a></li>
                                    <li><a href="#">3D Experience</a></li>
                                    <li><a href="#">Classic Comfort</a></li>
                                  </ul>
                                </div> -->
                              </li>
                              <li class="ion-chevron-left">
                                <a class="ion-camera" href="#">Orders</a>
                                <!-- <div class="mp-level">
                                  <h2>Cameras</h2>
                                  <a class="mp-back" href="#">back</a>
                                  <ul>
                                    <li><a href="#">Smart Shot</a></li>
                                    <li><a href="#">Power Shooter</a></li>
                                    <li><a href="#">Easy Photo Maker</a></li>
                                    <li><a href="#">Super Pixel</a></li>
                                  </ul>
                                </div> -->
                              </li>
                              <li class="ion-chevron-left">
                                <a href="#">My favorits </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="ion-chevron-left">
                          <a class="ion-document-text btn-active" href="#">Store</a>
                          <div class="mp-level">
                            <!-- <h2 class="ion-document-text">Magazines</h2> -->
                            <a class="mp-back" href="#">Store</a>
                            <ul>
                              <li><a href="#" class="btn-simple">Featured</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="collections.php?level=Colletions&link=All">Collection 1</a></li>
                                    <li><a href="collections.php?level=Colletions&link=All">Collection 2</a></li>
                                    <li><a href="collections.php?level=Colletions&link=All">Collection 3</a></li>
                                    <li><a href="collections.php?level=Colletions&link=All">All</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#" class="btn-simple">Footbeds</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="product-list.php?level=Footbeds&link=All">Shop all</a></li>
                                    <li><a href="product-list.php?level=Footbeds&link=By">Shop by</a>
                                      <div class="mp-level">

                                        <a class="mp-back" href="#">Shop by</a>
                                        <ul>
                                          <li class="ion-chevron-left">
                                            <a class="ion-tshirt-outline" href="#">Collection</a>
                                            <div class="mp-level">
                                              <a class="mp-back" href="#">By Collection</a>
                                              <ul>
                                                <li><a class="ion-star" href="product-list.php?level=Active&link=All">Active</a></li>
                                                <li><a class="ion-star" href="product-list.php?level=Active&link=All">Active with Met Pad</a></li>
                                                <li><a class="ion-star" href="product-list.php?level=Casual&link=All">Casual</a></li>
                                              </ul>
                                            </div>

                                          </li>
                                          <li><a class="ion-star" href="product-list.php?level=Active&link=All">Injury</a></li>
                                          <li><a class="ion-music-note" href="product-list.php?level=Active&link=Shoe">Shoe type</a></li>
                                          <li><a class="ion-coffee" href="product-list.php?level=Active&link=Activity">Activity</a></li>
                                          <li><a class="ion-coffee" href="product-list.php?level=Active&link=Athletes">Athletes</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#" class="btn-simple">Footwear</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="product-list.php?level=Footwear&link=Men">Men</a></li>
                                    <li><a href="product-list.php?level=Footwear&link=Women">Women</a></li>
                                    <li><a href="product-list.php?level=Footwear&link=All">All</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#" class="">Socks</a></li>
                              <li><a href="#" class="btn-simple">Sale</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="product-list.php?level=Socks&link=Men">Men</a></li>
                                    <li><a href="product-list.php?level=Socks&link=Women">Women</a></li>
                                    <li><a href="product-list.php?level=Socks&link=All">All</a></li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#">Gift card</a></li>
                              <li><a href="product-list.php?level=All&link=Men">Shop all</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="product-list.php?level=All&link=Men">Men's all</a></li>
                                    <li><a href="product-list.php?level=ALL&link=Women">Women's all</a></li>
                                  </ul>
                                </div></li>
                            </ul>
                          </div>
                        </li>
                        <li class="ion-chevron-left">
                          <a class="ion-bag btn-active" href="#">Reviews</a>
                          <div class="mp-level">
                            <!-- <h2 class="ion-bag">Reviews</h2> -->
                            <a class="mp-back" href="#">Reviews</a>
                            <ul>
                              <li class="ion-chevron-left">
                                <a class="ion-tshirt-outline btn-simple" href="#">Products</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="review.php">Footwear</a></li>
                                    <li><a href="review.php">Footbeds</a></li>
                                    <li><a href="review.php">Socks</a></li>
                                  </ul>
                                </div>

                              </li>
                              <li><a class="ion-star" href="review.php">Health</a></li>
                              <li><a class="ion-music-note" href="review.php">Press</a></li>
                              <li><a class="ion-coffee" href="add-review.php">Add review</a></li>
                            </ul>
                          </div>
                        </li>
                        <li><a class="ion-image btn-active" href="#">Heath</a>
                          <div class="mp-level">
                            <a class="mp-back" href="#">Heath</a>
                            <ul>
                              <li class="ion-chevron-left">
                                <a href="#">Prevention</a>
                              </li>
                              <li class="ion-chevron-left">
                                <a href="#">Research</a>
                              </li>
                              <li class="ion-chevron-left">
                                <a href="#">Sports</a>
                              </li>
                          </div>
                        </li>
                        <li><a class="ion-card btn-active" href="#">Why SOLE</a>
                          <div class="mp-level">
                            <!-- <h2 class="ion-bag">Why SOLE</h2> -->
                            <a class="mp-back" href="#">Why SOLE</a>
                            <ul>
                              <li class="ion-chevron-left">
                                <a class="ion-tshirt-outline" href="#">Our Story</a>

                              </li>
                              <li><a class="ion-star" href="#">Our Promise</a></li>
                              <li><a class="ion-music-note btn-simple" href="#">Sole Science</a>

                                      <div class="mp-simple">
                                        <ul>
                                          <li><a href="#">Footbed anatomy</a></li>
                                          <li><a href="#">How it works</a></li>
                                          <li><a href="#">Why cork</a></li>
                                        </ul>
                                      </div>

                              </li>
                              <li><a class="ion-coffee btn-simple" href="#">Sustainable innovation</a>

                                  <div class="mp-simple">
                                    <ul>
                                      <li><a href="#">ReCORK</a></li>
                                    </ul>
                                  </div>

                              </li>
                              <li><a class="ion-coffee btn-simple" href="#">Sole supports</a>
                                <div class="mp-simple">
                                  <ul>
                                    <li><a href="#">1% for the planet</a></li>
                                    <li><a href="#">Ambassadors</a></li>
                                    <li><a href="#">Charities</a></li>
                                    <li><a href="#">Enviromental</a></li>
                                    <li><a href="#">1% for the planet</a></li>
                                    <li><a href="#">ReCORK</a></li>
                                  </ul>
                                </div>
                              </li>

                            </ul>
                          </div>

                        </li>
                      </ul>
                    </div>
                </div>
              </nav>

        </div>

        <div class="scroller">
        <div class="scroller-inner">
