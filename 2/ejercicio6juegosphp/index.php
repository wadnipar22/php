<?php
session_name("juegos02");
session_start();

// Inicializamos las cartas de ambos jugadores si no existen
if (!isset($_SESSION["jugador1"]) || !isset($_SESSION["jugador2"])) {
    $_SESSION["jugador1"] = [rand(1, 10), rand(1, 10), rand(1, 10)];
    $_SESSION["jugador2"] = [rand(1, 10), rand(1, 10), rand(1, 10)];
}

// Verificamos si hay un mensaje de resultado
$resultado = isset($_SESSION["resultado"]) ? $_SESSION["resultado"] : "Sin evaluar";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Partida de Tres Cartas</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items text-white">
                        <h3>Partida de Tres Cartas</h3>
                        <p>Juego entre dos jugadores</p>
                        <form class="requires-validation" action="partida.php" method="POST" novalidate>
                            <div class="col-md-12 mb-3 text-center">
                                <!-- Mostrar las cartas del jugador 1 -->
                                <h5>Jugador 1 (Cartas Negras):</h5>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="260" height="190" viewBox="-50 -10 260 190">
                                    <?php foreach ($_SESSION["jugador1"] as $i => $carta): ?>
                                    <image href="img/cartas/n<?php echo htmlspecialchars($carta); ?>.svg" 
                                           x="<?php echo $i * 80; ?>" y="0" height="150" transform="rotate(<?php echo -15 + $i * 15; ?>, 0, 150)" />
                                    <?php endforeach; ?>
                                </svg>
                                <!-- Mostrar las cartas del jugador 2 -->
                                <h5 class="mt-4">Jugador 2 (Cartas Rojas):</h5>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="260" height="190" viewBox="-50 -10 260 190">
                                    <?php foreach ($_SESSION["jugador2"] as $i => $carta): ?>
                                    <image href="img/cartas/r<?php echo htmlspecialchars($carta); ?>.svg" 
                                           x="<?php echo $i * 80; ?>" y="0" height="150" transform="rotate(<?php echo -15 + $i * 15; ?>, 0, 150)" />
                                    <?php endforeach; ?>
                                </svg>
                                <!-- Mostrar el resultado de la partida -->
                                <p class="mt-4">Resultado: <strong><?php echo $resultado; ?></strong></p>
                            </div>
                            <div class="form-button mt-3 text-center">
                                <button type="submit" class="btn btn-warning mx-2" name="accion" value="Nueva">Nueva Partida</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<!-- cartas6.php -->

