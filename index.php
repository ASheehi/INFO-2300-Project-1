<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

$title = "Home";
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>

  <!-- TODO: This should be your main page for your site. -->
  <?php include('includes/header.php'); ?>

  <div class="row">
    <div class="column1 left" style="background-color:#F1172C;">
      <article>
        <h2 style ="font-family: cursive;">The Daily Blog</h2>
        <p style ="padding-bottom: 0;"><strong>Introduction</strong></p>
        <p style ="text-align: justify; padding-top: 0px;">This blog isn't your typical college life blog, although some aspects will definitely be similar. We try to spice it up here at CUSeeMe. Each of us live vastly different lives and this blog is meant to serve as a looking glass into each different day of our different lives.</p>
        <p style ="text-align: justify; padding-top: 0px;">I hope you enjoy what we have to offer within the coming days. It's prelim szn so we'll be busy for sure, but we'll make time to keep you updated! ;)</p>
        <p style ="text-align: right; padding-top: 0px; padding-right: 10px;">- Anthony</p>
      </article>
    </div>
    <div class="column1 right" style="background-color: white;">
      <h2 style ="font-size: 200%;">Outfit of The Week</h2>
      <div class="row">
        <div class="column1 leftSub">
          <img src="images/anthony.jpg" alt="Anthony_Model" width="270" height="360">
          <h6>Anthony Sheehi (CS '22)</h6>
        </div>
        <div class="column1 rightSub">
          <h2>The Chill(y) and Casual</h2>
          <p style ="color: black;"><strong>Top:</strong> T-shirt under a white Hollister hoodie, <strong>Outerwear:</strong> Calvin Klein heavy winter parka, <strong>Bottom:</strong> Aeropostale sweatpants, <strong>Shoes:</strong> GBX winter boots</p>
          <p style ="color: black;"><strong>His Inspiration:</strong> "When you wake up in the morning after a hard night of partying with a slight hangover, it's hard not to throw on whatever you've got laying around just so you can make it to brunch on time." </p>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
</body>
</html>
