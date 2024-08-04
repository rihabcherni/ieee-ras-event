<!DOCTYPE html>
<html lang="en">
<head>
  <title>RTC 1.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/countdown.css">
</head>
<body>


<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
      <?php include 'html/header.html'; ?>
      <?php include 'html/sidenav.html'; ?>

        <ul class="l-main-content main-content">
          <?php include 'html/section1.html'; ?>
          <?php include 'html/section2.html'; ?>
          <?php include 'html/section3.html'; ?>
          <?php include 'html/section4.html'; ?>
          <?php include 'html/section5.html'; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php include 'html/outer-nav.html'; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/functions-min.js"></script>
<script src="assets/js/countdown.js"></script>
</body>
</html>
