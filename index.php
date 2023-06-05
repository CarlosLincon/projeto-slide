<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <link rel="shortcut icon" href="favicon.ico" type="image/png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Faculdade Santíssimo Sacramento</title>

    <?php require "topo.php"; ?>
    <?php require "lado.php"; ?>
    <?php require "meio1.php"; ?>
    <?php require "rodape.php"; ?>
    <?php require "contagemBanner.php"; ?>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Pop Up</title>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        $('#mask').css({
          'width': maskWidth,
          'height': maskHeight
        });

        $('#mask').fadeIn(1000);
        $('#mask').fadeTo("slow", 0.8);

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        $('#dialog2').css('top', winH / 2 - $('#dialog2').height() / 2);
        $('#dialog2').css('left', winW / 2 - $('#dialog2').width() / 2);

        $('#dialog2').fadeIn(2000);

        $('.window .close').click(function(e) {
          e.preventDefault();

          $('#mask').hide();
          $('.window').hide();
        });

        $('#mask').click(function() {
          $(this).hide();
          $('.window').hide();
        });

      });
    </script>

    <style type="text/css">
      #mask {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 9000;
        opacity: 0.95;
        color: #000000;
        display: none;
        background-color: #000000;
        filter: alpha(opacity=10)
      }

      #boxes .window {
        position: absolute;
        left: 0;
        top: 0;
        width: 440px;
        height: 415px;
        display: none;
        z-index: 9999;
        padding: 20px;
      }

      #boxes #dialog2 {
        background: transparent;
        width: 853px;
        margin: 0 auto;
        margin-top: 0px;
      }

      .close {
        display: block;
        text-align: right;
      }
    </style>

  </head>

  <body>

    <div id="boxes">

      <div id="dialog2" class="window">
        <div align="right">
          <input type="button" value="Fechar" class="close" />
        </div>
        <a target="_blank" href="/vestibular"><?php

                                              $atualizador = new Atualizador();
                                              $atualizador->atualizarVariavel();
                                              $valorAtualizado = $atualizador->getVariavel();

                                              $html = '<img src="/vestibular/img/20232/banner-frontal' . $valorAtualizado . '.jpg" width="850" height="400"/>';
                                              echo $html; ?></a><br />
        <!--         <div style="display: inline-flex;">
<a target="_blank" href="/vestibular"><img src="/vestibular/img/20231/banner-vestibular.jpeg" width="840" height="279.56" /></a><br />
             <a target="_blank" href="http://caderneta.fsssacramento.br/SCIAWEB/areadoaluno/Views/login.php"><img src="/cpa/banner-cpa-20212.png" width="450" height="400" /></a><br />
-->

      </div>
    </div>


    <div id="mask"></div>

    </div>
  </body>

  </html>