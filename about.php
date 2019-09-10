<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

$title = "About Us";
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>

  <!-- TODO: This should be your about us page for your site. -->
  <?php include('includes/header.php'); ?>

  <div class="row">
    <div class="column2 left" style="background-color:#F1172C;">
      <h2>Contact Us</h2>
      <p>Anthony Sheehi: <a href="mailto:ajs636@cornell.edu">ajs636@cornell.edu</a></p>
      <p>Kemi Adewalure: <a href="mailto:oka7@cornell.edu">oka7@cornell.edu</a></p>
      <p>Alex Foley: <a href="mailto:awf47@cornell.edu">awf47@cornell.edu</a></p>
    </div>
    <div class="column2 right" style="background-color: white;">
      <h2>Who We Are</h2>
      <p style ="padding-bottom: 20px; color: black; padding-left: 40px; text-align: center;">CUSeeMe is a fashion website that also showcases the experiences of a college freshman (at Cornell University). The website will contain stories of me and my closest friends. It will provide a platform
    for students who are prospective Cornellians, current college students, and of course, the fashionistas.
    We are here to promote the spread of information regarding the average daily
    life of a college student in conjunction with good fashion tips to give your life some <em>spice</em>.</p>
      <div id ="bios">
        <img src="images/anthonyBio.jpg" alt="Anthony_Bio" width="200" height="200">
        <h1 style ="color: black;">Anthony Sheehi<h1>
        <h2>Hey guys! My name's Anthony Sheehi and I'm the developer and co-founder of CUSeeMe. I am currently a freshman studying Computer Science in the College of Engineering (transferring to A&S soon though). I take pride in the fact that I have diverse interests and abilities. While I might seem like a complete computer geek at first, I'm actually really into the sociology, cultures, and languages. I also really love music (and I sing and play my ukulele pretty often). I like to maintain a positive outlook in life and no matter what happens now I know that there's a lot more ahead of me. Look forward to the continously updated site! Enjoy!</h2>
        <p style ="padding-bottom: 40px;"> </p>
        <img src="images/kemiBio.jpg" alt="Kemi_Bio" width="200" height="200">
        <h1 style ="color: black;">Kemi Adewalure<h1>
        <h2>안녕하세요. 你好。Hello everyone, my name is Kemi. I am a freshman in Arts and Sciences majoring in Asian Studies.  Some people call me Kemi, Kimcheese, Sunshine, cupid Genie Linguine, and many other names I just made up. I’d like to say I’m the funniest out of all of them, and the bluntest. If you got a booger in your nose, I’ll let you know. If you want me to lie for you, I’ll just tell the truth. I’d also like to say that I'm the most fashionable (depending on the days cause ya girl be looking rough). Anyway, that’s as much of me I can describe in words so… like a fat boy in dodgeball, I’m out.</h2>
        <p style ="padding-bottom: 40px;"> </p>
        <img src="images/AlexBio.jpg" alt="Alex_Bio" width="200" height="200">
        <h1 style ="color: black;">Alex Foley<h1>
        <h2>Hey guys! My name is Alex and I am a freshman studying Industrial and Labor Relations. I love traveling, food, and going on adventures! I’m from California and I miss home so much because <em>Ithaca is high key boring</em> and I miss my family…. Also, I run marathons, track, cross country and I play the saxophone!</h2>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
</body>
</html>
