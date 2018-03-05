<!DOCTYPE html>
<html lang="en">
<head>
<!--==============================HEAD=================================-->
<?php include_once "includes/head.php"; ?>
<!--==============================/HEAD=================================-->
</head>
<body>
<!--==============================header=================================-->
<div class="header-block clearfix">
  <!-- ================== TOPO ================== -->
  <?php include_once "includes/topo.php"; ?>
  <!-- ================== /TOPO ================== -->
</div>
<!--==============================content=================================-->
<section id="content">
  <div class="container">
    <!-- welcome text -->
    <div class="row">
      <div class="span12">
        <div class=" page-effect-wrapper">
          <div class="effect-left"></div>
          <div class="effect-right"></div>
          <div class="page-header1">
            <h2>TopFans <small>out who are your biggest fans on Facebook</small></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- portfolio 2 -->
    <div class="row">
      <div class="span12">
        <!-- portfolio starts -->
        <div class="row">
          <!-- 1 -->
          <div class="span8">
            <div id="myCarousel" class="carousel slide portfolio-single-slider">
              <div class="carousel-inner">
                <div class="item active"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site01.png"></center></div>
                <div class="item"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site02.png"></center></div>
                <div class="item"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site03.png"></center></div>
                <div class="item"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site04.png"></center></div>
                <div class="item"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site05.png"></center></div>
                <div class="item"><center><img class="img-circle" alt="" src="img/portfolio/screen_iphone_topfans_site06.png"></center></div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> </div>
          </div>
          <!-- 2 -->
          <div class="span4">
            <div class="portfolio-single">
              <h2>Description</h2>
              <p>From an analysis on your Facebook profile, this app reveals what are your biggest fans of Facebook, seeking information on both of tanned received as of the comments received. With this application you will be able to know what their friends that you value most.</p>
              <p>One of its most interesting features is the possibility for you to analyze and monitor what are the biggest fans of their facebook friends. (Extra Feature)</p>
               <h2>Download</h2>
              <p align="center"><img style="cursor:pointer;" title="Wait! soon" src="img/portfolio/android-google-play-embreve.png" width="200"></p>
              <p align="center"><a href="https://itunes.apple.com/br/app/topfans-for-facebook/id873208413?mt=8" target="_blank"><img style="cursor:pointer;" title="Click Here" src="img/portfolio/ios-app-store.png" width="200"></a></p>
              <p>
                <br><br>
                <a href="http://www.in6mobile.com/en/topfans-termuse.php"><b><u>Terms of Use</u></b></a>&nbsp;|&nbsp;
                <a href="http://www.in6mobile.com/en/topfans-policy.php"><b><u>Privacy Policy</u></b></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================/content=================================-->
<!--==============================footer=================================-->
<?php include_once "includes/rodape.php"; ?>
<!--==============================/footer=================================-->
</body>

<script type="text/javascript">
  $(document).ready(function(){   
    $("#topo_portfolio").addClass("active");
  });    
</script>
</html>
