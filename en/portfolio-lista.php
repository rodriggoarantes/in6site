<!DOCTYPE html>
<html lang="en">
<head>
<!--==============================HEAD=================================-->
<?php include_once "includes/head.php"; ?>
<!--==============================/HEAD=================================-->
</head>
<body class="home-page">
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
            <h2>Portfólio IN6 <small> Veja aqui o que fizemos e o que estamos fazendo.</small></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- portfolio 2 -->
    <div class="row">
      <div class="span12 portfolio">

        <!-- portfolio starts -->
        <div class="row clearfix" style="margin-top: 30px;">
          <ul class="portfolio-post-grid holder">
            <!-- 1 -->
            <li class="span4 portfolio-item" data-id="id-1" data-type="business">
              <span class="4col portfolio-box-img">
                  <div class="box-em-breve">
                  <a href="topfans/">
                  <img src="img/portfolio/portfolio-facetopfans.png" alt="Face Top Fans">
                  </a>
                  </div>
              </span> 
              <span class="portfolio-item-meta">
              <a href="topfans/">Face Top Fans</a>Descubra quem são seus fãs no Facebook, e o melhor <br>descubra os fãns dos seus amigos.
              </span> 
            </li>
            <!-- 2 -->
            <li class="span4 portfolio-item" data-id="id-2" data-type="graphics">
              <span class="4col portfolio-box-img">
                <div class="box-em-breve">
                  <div class="sticker-em-breve"></div>
                  <img src="img/portfolio/portfolio-minhavez.png" alt="Minha Vez">
                </div>
              </span>
              <span class="portfolio-item-meta">
                <a>Minha Vez</a>Um aplicativo prático que irá facilitar a vida de <br>muitos consumidores. Aguarde.
              </span>
            </li>
            <!-- 3 -->
            <li class="span4 portfolio-item" data-id="id-3" data-type="business">
              <span class="4col portfolio-box-img">
                <div class="box-em-breve">
                  <div class="sticker-em-breve"></div>
                  <img src="img/portfolio/portfolio-politikos.png" alt="Políticos">
                </div>
              </span>
              <span class="portfolio-item-meta">
                <a>Políticos</a>A rede social que irá ajudar você a fazer a escolha certa.
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
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
