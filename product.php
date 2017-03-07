<?php
  include 'includes/PRO_HEADER.php';
?>

<style>
html, body {
    position: relative;

}

.swiper-container {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
}
.swiper-slide {
    background-size: cover;
    background-position: center;
}
.gallery-top {
    height: 80%;
    width: 100%;
}
.gallery-thumbs {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
}
.gallery-thumbs .swiper-slide {
    height: 100%;
    opacity: 0.4;
}
.gallery-thumbs .swiper-slide-active {
    opacity: 1;
}

</style>

<div class="container product">
  <div class="row ">
    <p class="text-center"> <o class="template-level"> Footbeds </o> > <strong><o class="template-link"> Active Thick </o></strong></p>
    <h3 class="text-center">Item name</h3>
    <p class="text-center" >
      <span class="sale">110.00 CAD</span> 25% <strong> 85.00 CAD </strong>
    </p>

  <div class="">

    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">  <img src="http://placehold.it/300x300"></div>
            <div class="swiper-slide">  <img src="http://placehold.it/300x300"></div>
            <div class="swiper-slide">  <img src="http://placehold.it/300x300"></div>
            <div class="swiper-slide">  <img src="http://placehold.it/300x300"></div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="col-xs-12">

      <div class="product-tbn">
        <img class='img-thumbnail' src="http://placehold.it/300x300">

        <img class='img-thumbnail' src="http://placehold.it/300x300">

        <img class='img-thumbnail' src="http://placehold.it/300x300">

      </div>



    </div>
  </div>

  <div class="col-xs-12">
 </br>
  </br>
    <div class="clearfix"> </br></div>
    <div class="clearfix"> </div>

    <form class="" action="index.php" method="post">
      <div class="form-group col-xs-6">
        <select class="form-control">
          <option>Size</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    <div class="form-group col-xs-6">
      <label class="col-xs-4 control-label text-right">QTY</label>
      <div class="form-group col-xs-8">
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="1">
      </div>
    </div>

    </form>

    <div class="col-xs-12">
      <a href="#demo" class="moreinfo" data-toggle="collapse">Products details</a>
      <div id="demo" class="collapse">
        <div class="col-xs-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>

      <a href="#feature" class="moreinfo" data-toggle="collapse">Features</a>
      <div id="feature" class="collapse">
        <div class="col-xs-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>

      <a href="#Reviews" class="moreinfo" data-toggle="collapse">Reviews</a>
      <div id="Reviews" class="collapse">
        <div class="col-xs-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>

      <a href="#Share" class="moreinfo" data-toggle="collapse">Share</a>
      <div id="Share" class="collapse">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

    </div>

    <div class="col-xs-12">
    </br>
      <h4>You might also like:</h4>
      <div class="row">
        <div class="product-list">
          <div class="col-xs-6">
            <a href="product.php" class="product-list-button">
              <img src="http://placehold.it/300x300">
              <h4>Collection name</h4>
              <p class="description">Item name </p>
              <small class="price">110.00 CAD </small>
              <p class="description">3 colors</p>
            </a>
          </div>

          <div class="col-xs-6">
            <a href="product.php" class="product-list-button">
              <img src="http://placehold.it/300x300">
              <h4>Collection name</h4>
              <p class="description">Item name </p>
              <small class="price">110.00 CAD </small>
              <p class="description">3 colors</p>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>



</div>

<?php
  include 'includes/PRO_FOOTER.php';
?>

 <script type="text/javascript">
 $( document ).ready(function() {
     $('.add-to-cart').removeClass('hidden');
 })


 var galleryTop = new Swiper('.gallery-top', {
     nextButton: '.swiper-button-next',
     prevButton: '.swiper-button-prev',
     spaceBetween: 10,
     loop:true,
     loopedSlides: 5, //looped slides should be the same
 });

 galleryThumbs.params.control = galleryTop;

 </script>
