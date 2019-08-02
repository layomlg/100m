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
        <p class="respuesta">1) <span>En el sitio del programa</span><button>abrir</button></p>
        <p class="respuesta">2) <span>*************************</span><button>abrir</button></p>
        <p class="respuesta">3) <span>Enviando un correo a la cuenta del programa</span><button>abrir</button></p>  
      </div>
      <div class="pts t-acum"><span>165</span></div>
      <div class="pts t-azul"><span>95</span></div>
      <div class="pts t-rojo"><span>0</span></div>
    </div>






    <!-- JS Scripts -->
    <script>
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
    </script>

  </body>

</html>
