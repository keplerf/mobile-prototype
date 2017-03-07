<?php
  include 'includes/PRO_HEADER.php';
?>



<div class="container">



  <div class="row ">
  <p class="text-center"> <o class="template-level">Footbeds </o> > <strong><o class="template-link">Shop All</0></strong></p>
  <div class="product-list" >
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>
    <div class="col-xs-6">
      <a href="product.php" class="product-list-button">
        <img src="http://placehold.it/300x300">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </a>
    </div>

  </div>

  <div class="product-list-view" style="display:none">
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
      
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>
    <div class="col-xs-12 item">
      <div class="col-xs-5">
        <img src="http://placehold.it/300x300">
      </div>
      <div class="col-xs-7">
        <h4>Collection name</h4>
        <p class="description">Item name + color</p>
        <small class="price">110.00 CAD </small>
      </div>
      <hr>
    </div>


  </div>

  </div>
  </div>
</div>

<!-- Initialize Swiper -->


<?php
  include 'includes/PRO_FOOTER.php';
?>

 <script type="text/javascript">
 $( document ).ready(function() {
     $('.filter-products').removeClass('hidden');

     $('.filter-products .btn-list').on('click',function(evt){
       $('body').find('.product-list').hide('fast')
       $('body').find('.product-list-view').show('slow')
       $(this).find('img').attr("src", 'images/icons/filter-list-active.svg');
       $('body').find('.btn-grid img').attr('src', 'images/icons/filter-grid.svg' )
     });
     $('.filter-products .btn-grid').on('click',function(evt){
       $('body').find('.product-list-view').hide('fast')
       $('body').find('.product-list').show('slow')
       $(this).find('img').attr("src", 'images/icons/filter-grid-active.svg');
       $('body').find('.btn-list img').attr('src', 'images/icons/filter-list.svg' )
     });




 })

 </script>
