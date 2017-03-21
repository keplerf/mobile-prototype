<div class="container" style="display:none">
  <div class="row">
    <div class="footer text-center">
      <h4>Find a store</h4>
      <h4>FAQ</h4>
      <h4>Press kit</h4>
      <h4>Careers</h4>
      <h4>1% for the planet</h4>
      <h4>Contact us</h4>
      <h4>Recork</h4>
      <h4>Blog</h4>
    </div>
  </div>
  <div class="col-xs-12 text-center">
    <h4>Copyright</h4>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<!-- <script src="js/jquery.mobile.custom.min.js"></script> -->
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
<script>
  // new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'triggerw' ) );

  // $( "#mypanel" ).trigger( "updatelayout" );

var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    slidesPerView: 'auto',
    paginationClickable: true,
    spaceBetween: 30
});

$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}



var level = $.urlParam('level');
var link = $.urlParam('link')

if (level != "null"){
  $('.template-level').html(level);

}else{
};

if (link != "null"){
  $('.template-link').html(link);
  $('.product-list a').attr('href', function(i, href) {
    return href + '?link='+ link + '&level=' + level;
  });
  $('.product-list-view a').attr('href', function(i, href) {
    return href + '?link='+ link + '&level=' + level;
  });
}else{
};





</script>


</body>
</html>
