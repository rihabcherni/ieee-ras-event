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
  <link rel="stylesheet" href="assets/css/components/countdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>


<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
      <?php include 'components/header.html'; ?>
      <?php include 'components/sidenav.html'; ?>

        <ul class="l-main-content main-content">
          <?php include 'components/home.html'; ?>
          <?php include 'components/about.html'; ?>
          <?php include 'components/event.html'; ?>
          <?php include 'components/registration.html'; ?>
          <?php include 'components/team.html'; ?>
          <?php include 'components/contact.html'; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php include 'components/outer-nav.html'; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/functions-min.js"></script>
<script src="assets/js/countdown.js"></script>
</body>
</html>
