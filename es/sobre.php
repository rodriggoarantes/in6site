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
            <h2>Sobre a IN6<small> Quem Somos?</small></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- rows -->
    <div class="row font-12" style="min-height: 300px;">

      <div class="span12">
        <!-- blog 1 -->
        <div class="post-border-right">
          <article class="post-holder">
            <header>
              <div class="date" style="margin-top: 10px;"> 
                <span class="day">01</span> <span class="month">Março</span> 
              </div>
              <div class="fleft post-meta" style="margin-top: 10px; width: 90%">
              </div>
            </header>
            <div class="clearfix"></div>
            
            <h3>A IN6 Mobile</h3>
            <p>
               Somos uma empresa especializada em desenvolvimento de soluções para dispositivos móveis (iOS e Android). Criamos aplicativos e sistemas para Web, Smartphones, Tablets, etc. Conheça um pouco mais sobre a empresa:
            </p>
            <h2>Missão</h2>
            <p>
               Nossa missão é composta por três pilares:
               <ul>
                  <li class="arrow-list">
                    Promover diálogo fácil e trabalhar em parceria com o cliente durante todo o processo de criação;
                  </li>
                  <li class="arrow-list">
                    Desenvolver projetos originais e exclusivos de acordo com o perfil e os objetivos de cada cliente;
                  </li>
                  <li class="arrow-list">
                    Atender e superar expectativas;
                  </li>
               </ul>
            </p>

            <h2>Visão</h2>
            <p>
               Ampliar a atuação em diversos segmentos e tornar-se referência no país em desenvolvimento de aplicativos mobile.
            </p>

            <h2>Valores</h2>
            <p>
               Nossos valores são compostos por cinco pilares:
               <ul>
                  <li class="circle-list">Excelência</li>
                  <li class="circle-list">Criatividade</li>
                  <li class="circle-list">Tecnologia</li>
                  <li class="circle-list">Inovação</li>
                  <li class="circle-list">Flexibilidade</li>
               </ul>
            </p>

          </article>
        </div>
      </div>

      <!-- row 2 -->
      <div class="span12">
       <p><!-- more text --></p>
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
    $("#topo_sobre").addClass("active");
  });    
</script>
</html>
