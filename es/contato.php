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
          <div class="page-header1" style="background-color: #D1F2CC; border-color: #ACE8A4;">
            <h2 style="color: #4D8D3E;">Fale Conosco<small style="color: #3EA131;"> Nos escreva uma mensagem e teremos satisfação em lhe responder.</small></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- contact form & map -->
    <div class="row">
      <div class="span12" style="display:none;">
        <div class="map">
          <iframe src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=Envato+Level+13,+2+Elizabeth+St,+Melbourne+Victoria+3000+Australia&amp;daddr=&amp;hl=en&amp;geocode=FZQHv_0d_AykCCGxVRMNIz_D7Q&amp;aq=t&amp;sll=-37.812332,144.968956&amp;sspn=0.012087,0.022724&amp;mra=prev&amp;ie=UTF8&amp;t=m&amp;iwloc=ddw0&amp;ll=-37.812332,144.968956&amp;spn=0.012087,0.022724&amp;output=embed"></iframe>
        </div>
      </div>

      <div class="span12">


        <?php
          if ( isset($_POST["email"]) && !empty($_POST["email"]) ) {
                  //====================================================
                  $nome = $_POST['nome'];
                  $email = $_POST['email'];
                  $telefone = $_POST['telefone'];
                  $mensagem = $_POST['mensagem'];
                  //====================================================
                  //====================================================
                  $email_remetente = "in6mobile@in6mobile.com"; // deve ser um email do dominio
                  //====================================================
                  //====================================================
                  $email_destinatario = "contato@in6mobile.com"; // qualquer email pode receber os dados
                  $email_reply = "$email";
                  $email_assunto = "Contato Site - in6 Mobile";
                  //====================================================
                  //====================================================
                  $email_conteudo = "Nome = $nome \n";
                  $email_conteudo .= "Email = $email \n";
                  $email_conteudo .=  "Telefone = $telefone \n";
                  $email_conteudo .=  "Mensagem = $mensagem \n";
                  //====================================================
                  //====================================================
                  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
                  //====================================================
                  //Enviando o email
                  //====================================================
                  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
                    echo "<div class='alert alert-success' style='margin-top: 15px;font-size: 14px;'>E-Mail enviado com sucesso!</div>";
                  } else {
                    echo "<div class='alert alert-error' style='margin-top: 15px; font-size: 14px;'><b>Falha no envio do E-Mail, tente mais tarde!</b></div>";
                  }
                  //====================================================
          }
        ?>
        <form id="contact-form" name="contatoForm" class="contact-form" action="contato.php" method="post"
          style="width: 80%;margin: 10px;margin-top: 30px;" >
          <fieldset class="thumbnails thumbnails_2" style=" width: 80%; margin: 0px; ">
          <label class="name span3">
            <input type="text" placeholder="*Nome:" name="nome" title="Nome do Contato" class="required"/>
          </label>
          <label class="email span3">
            <input type="text" placeholder="*E-mail:" name="email" title="E-mail" class="required email"/>
          </label>
          <label class="phone span3">
          <input type="text" placeholder="Telefone:" name="telefone" title="Telefone" alt="phone"/>
          </label>
          <label class="message span9">
          <textarea placeholder="*Mensagem" name="mensagem" title="Mensagem" class="message1 required"></textarea>
          </label>
          </fieldset>
          <div class="pull-left" style="width: 100%;">
              <input type="reset" class="btn btn-success" data-type="reset" name="BTApaga" value="Limpar" style="width: 150px; font-size: 15px; margin-left: 30px;"/>
              <input type="submit" class="btn btn-success" data-type="submit" name="BTEnvia" value="Enviar" style="width: 150px; font-size: 15px; margin-left: 30px;"/>
          </div>
        </form>
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
  $(document).ready(function() {
    //Ativar aba do menu principal - topo   
    $("#topo_contato").addClass("active");

    //Ativar o JQuery Hammer
    $("#contact-form").hammerForm();

    //Ativa meio mask para os campos input do type text
    //onde tiver a tag 'alt' ex.: alt='numero'
    $.mask.options.autoTab = false;
    $('input:text[alt]').setMask();
  });
</script>

</html>
