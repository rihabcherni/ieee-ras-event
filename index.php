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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <?php include 'components/program.php'; ?>
            <?php include 'components/event.html'; ?>
            <?php include 'components/registration.html'; ?>
            <?php include 'components/team.html'; ?>
            <?php include 'components/contact.html'; ?>
      <section class="wrapper-star">
          <div id="stars"></div>
          <div id="stars2"></div>
          <div id="stars3"></div>
      </section>
        <div class="logos">
          <img src="assets/img/logo/ras-logo.png" alt="logo RTC 1.0" width="57">
          <img src="assets/img/logo/ras-ensit.png" alt="logo RTC 1.0" width="120">
        </div>
            <div class="social-container">
              <ul class="social-icons">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=61563766478734">
                    <i style="font-size:24px ;left: 13px;" class="fa">&#xf09a;</i>

                  </a>
                </li>
                  <li>
                    <a href="https://www.instagram.com/ieee.rtc.1.0?igsh=ZnZqOTUzcXp1MGpl">
                    <i style="font-size:24px" class="fa">&#xf16d;</i>
                    </a>
                </li>
              </ul>
            </div>
            <div class="footer">
              <p>© RTC 1.0. All rights reserved.</p>
            </div>

          </ul>
        </div>
      </div>
    </div>
    <?php include 'components/outer-nav.html'; ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
  <script src="assets/js/functions-min.js"></script>
  <script src="assets/js/team.js"></script>
  <script src="assets/js/countdown.js"></script>
  <script src="assets/js/event.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>
    
    <script>
        $('.team-members').slick({
            slidesToShow: 3,
            speed: 300,
            prevArrow:'#left-arrow',
            nextArrow:'#right-arrow',
            centerPadding: '60px',
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 760,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }]});
    </script>
</body>
</html>
