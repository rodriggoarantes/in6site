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
            <h2>TopFans <small>descubra quem são os seus maiores fãs no Facebook</small></h2>
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
              <h2>Descrição</h2>
              <p>A partir de uma análise no seu perfil do Facebook, este aplicativo revela quais são seus maiores fãs do Facebook, 
                buscando as informações tanto das curtidas recebidas como dos comentários recebidos. Com esse aplicativo você será 
                capaz de saber quais são os seus amigos que mais te valorizam.</p>
              <p>Uma de suas funcionalidades mais interessantes é a possibilidade de você analisar e acompanhar quais são os maiores
               fãs dos seus amigos do facebook. (Funcionalidade Extra)</p>
              <p>&nbsp;</p><p>&nbsp;</p>
              <p align="center"><img style="cursor:pointer;" title="Aguarde! Em breve" src="img/portfolio/android-app-on-google-play-site.png" width="200"></p>
              <p align="center"><img style="cursor:pointer;" title="Aguarde! Em breve" src="img/portfolio/app-store-site.png" width="200"></p>
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
