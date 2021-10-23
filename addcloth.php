<?php

require_once('includes/mydatabase.php');
$page_title = "Add Cloth";
require_once ('includes/header_a.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Add Cloth</li>
  </ul>

  <h1 class="text-center">ADD CLOTH</h1>
  <p class="lead text-center">Please add your desired cloth</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processcloth.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newClothName" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newClothName" name="cloth_name" placeholder="Cloth Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="clothPrice" class="col-sm-3 control-label">Price</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="clothPrice" name="cloth_price" placeholder="Price" required>
        </div>
      </div>
      <div class="form-group">
        <label for="clothBio" class="col-sm-3 control-label">Cloth Bio</label>
        <div class="col-sm-9">
          <textarea type="email" class="form-control" id="clothBio" name="cloth_bio" rows="4" placeholder="Enter Details" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Cloth URL</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="cloth_image" placeholder="Enter URL" required>
        </div>
      </div>
      <div class="form-group">
        <label for="clothRating" class="col-sm-3 control-label">Rating</label>
        <div class="col-sm-9">
          <select id="clothRating" name="cloth_rating" class="form-control" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="NR">NR (Not Rated)</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-info">Add Cloth</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>