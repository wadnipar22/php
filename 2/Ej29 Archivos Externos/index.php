<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/css.css">
    <title>Ejercicios PHP 29</title>
  </head>
  <body>
    <header>
      <section>
        <h1>Incluir Archivos Externos</h1>
      </section>
    </header>
    <div class="cuadro">
      <div class="cuadro2">
        <?php
          require_once("cabpie.php");//Incluyo el Archivo Externo → cabpie.php
          cabeceraPagina("Titulo principal de la página ✔️");
          cuerpo("Hasta ahora hemos visto que un archivo contiene todo el código (HTML y PHP), pero el lenguaje PHP nos permite crear librerías de funciones o clases que veremos más adelante.<br><br>La idea fundamental de las librerías es agrupar funciones comunes a muchas páginas, no tener que tipearlas en cada archivo, lo que supone que cuando haya que hacer cambios en esas funciones las debemos localizar y modificar y dicha modificación afectará a todos los archivos donde se las utiliza.<br><br> La implementación de librerías nos permite hacer que un sistema sea más modular y facilita su mantenimiento. Para probar esta característica del lenguaje, implementaremos tres funciones en la página cabpie.php y llamaremos a dichas funciones en esta página.");
          cabeceraPagina("✔️ Fin Ejercicio");
          piePagina("©️ 2024 Todos los derechos reservados SENA ®️");
        ?>
      </div>
  	</div>
  </body>
</html>