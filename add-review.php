<?php
  include 'includes/PRO_HEADER.php';
?>

<div class="filter-grid fix-bottom">
  <div class="row">
    <div class="col-xs-12 text-center">
      <a href="#" class="btn-block text-center">Add review</a>
    </div>
  </div>
</div>

<div class="container review">
  <div class="col-xs-12">
    <h3>< Add your review</h3>
    <hr>
    <h4>Are you* :</h4>
    <form class="" action="index.php" method="post">
      <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Man
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Woman
        </label>
      </div>
      <hr>
    </form>

    <h4>Select Product</h4>
    <div class="row">
      <div class="col-xs-12">
        <a href="#demo" class="moreinfo" data-toggle="collapse">Footwear</a>
        <div id="demo" class="collapse">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <a href="#Footbeds" class="moreinfo" data-toggle="collapse">Footbeds</a>
        <div id="Footbeds" class="collapse">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <a href="#Socks" class="moreinfo" data-toggle="collapse">Socks</a>
        <div id="Socks" class="collapse">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
  include 'includes/PRO_FOOTER.php';
?>
