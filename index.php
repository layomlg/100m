<!DOCTYPE html>
<html lang="es" >

  <head>
    <meta charset="UTF-8">
    <title>100 Guerreros Dijeron</title>
    <link rel="shortcut icon" href="img/favicon.png"/>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Saira+Extra+Condensed:700&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="sonidos">
      <audio id="inicio">
        <source src="sounds/inicio.mp3" type="audio/mpeg">
      </audio>
      <audio id="respuesta">
        <source src="sounds/respuesta.mp3" type="audio/mpeg">
      </audio>
      <audio id="error">
        <source src="sounds/error.mp3" type="audio/mpeg">
      </audio>

    </div>
    <div class="fullscreen">
      <button id="full1" onclick="launchFullScreen(document.documentElement);"><i class="fas fa-expand-arrows-alt"></i> </button>
      <button id="full2" onclick="cancelFullScreen();"> <i class="fas fa-expand-arrows-alt"></i> </button>
    </div>

    <!-- Inicio STANDBY -->
    <div id="standby" class="container1">
      <img class="logo-100" src="./img/DIJERON.png">
    </div>
    <!-- Fin STANDBY -->
    <div class="container">
      <div class="logos">
        <img class="logo izq" src="./img/GB.png">
        <img class="logo der" src="./img/Danone.png">
      </div>


      <div class="preguntas">
        <p class="pregunta">¿Cómo puedes consultar los puntos con los que cuentas?</p>
        <p class="respuesta">1) <span>En el sitio del programa</span><button onclick="acumular(30);" class="open o30"><i class="fa fa-check" aria-hidden="true"></i></button></p>
        <p class="respuesta">2) <span>*************************</span><button onclick="acumular(20);" class="open"><i class="fa fa-check" aria-hidden="true"></i></button></p>
        <p class="respuesta">3) <span>Enviando un correo a la cuenta del programa</span><button onclick="acumular(10);" class="open"><i class="fa fa-check" aria-hidden="true"></i></button></p>
        <div class="error">
          <i class="fa fa-times" aria-hidden="true"></i>
          <i class="fa fa-times" aria-hidden="true"></i>
          <i class="fa fa-times" aria-hidden="true"></i>          
        </div>  
      </div>
      <div class="botones">
        <button onclick="acumrojo();" class="b-rojo"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
        <button onclick="error();" class="b-mal"><i class="fa fa-times" aria-hidden="true"></i></button>
        <button onclick="acumazul();" class="b-azul"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </div>
      <div class="pts t-acum"><span>0</span></div>
      <div class="pts t-rojo"><span>0</span></div>
      <div class="pts t-azul"><span>0</span></div>
    </div>






    <!-- JS Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      var acumulado = 0;
      var ptsRojo = 0;
      var ptsAzul = 0;
      function launchFullScreen(element) {
        if(element.requestFullScreen) {
          element.requestFullScreen();
        } else if(element.mozRequestFullScreen) {
          element.mozRequestFullScreen();
        } else if(element.webkitRequestFullScreen) {
          element.webkitRequestFullScreen();
        }
        document.getElementById("full1").style.display = "none";
        document.getElementById("full2").style.display = "block";
      }
      // Lanza en pantalla completa en navegadores que lo soporten
      function cancelFullScreen() {
        if(document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if(document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if(document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        }
        document.getElementById("full2").style.display = "none";
        document.getElementById("full1").style.display = "block";
      }


      function acumular(acum) {
        acumulado = acumulado + acum;
        $(".pts.t-acum").html(acumulado);
        document.getElementById("respuesta").play();
      }
      function acumrojo() {
        ptsRojo = ptsRojo + acumulado;
        acumulado = 0;
        $(".pts.t-acum").html(acumulado);
        $(".pts.t-rojo").html(ptsRojo);
        $(".open").show();
        $(".error").removeClass("uno");
        $(".error").removeClass("dos");
        $(".error").removeClass("tres");
        document.getElementById("inicio").play();
      }
      function acumazul() {
        ptsAzul = ptsAzul + acumulado;
        acumulado = 0;
        $(".pts.t-acum").html(acumulado);
        $(".pts.t-azul").html(ptsAzul);
        $(".open").show();
        $(".error").removeClass("uno");
        $(".error").removeClass("dos");
        $(".error").removeClass("tres");
        document.getElementById("inicio").play();
      }

      function error() {

        if($(".error").hasClass("uno")){
          if($(".error").hasClass("dos")){
            $(".error").addClass("tres");
          }
          else{
            $(".error").addClass("dos");
          }

        }
        else{
          $(".error").addClass("uno");
        }
        document.getElementById("error").play();
      }


      $(".open").click(function(){
        $(this).toggle();
      });
    </script>
  </body>


</html>
