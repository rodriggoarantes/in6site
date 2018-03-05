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
            <h2>TopFans App<small> </small></h2>
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
            
            <h3>PRIVACY POLICY</h3>

            <h2>A. Data User</h2>
            <p>
The TopFans, like many other Facebook apps, it uses its API to receive data from members and work on something that will add experience USERS, with these data, worked in way that would meet the needs of the normal functioning of the app TopFans.
The necessary data is made available by the USER for TopFans, and they are used in accordance with the "Policy on the Facebook Platform." 
It is only requested data necessary for normal operation of the app. Becoming clear that when using any app TopFans, the USER has agreed to provide this information. 
Data from users' friends are only used in the context of user experience in your application.
            </p>

            <h2>B. As the TopFans proceeds with its database of Facebook API</h2>
            <p>

The TopFans requests only the data you need to operate application. 
We do not transfer, directly or indirectly, the data you receive from the API, including user data or identification numbers of Facebook users, to (or use such data in connection with) any ad network, ad exchange, data broker or other tools related to advertising or monetization. 
We do not sell your data. 
We do not use data outside of the application; 
Do not use the data in ad creation;
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
