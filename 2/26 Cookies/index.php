<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Manejo de Cookies</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>MANEJO DE COOKIES</h3>
                        <form class="requires-validation text-center" action="cookies.php" method="POST" novalidate>
                            <select class="form-select mb-5" name="boton" required>
                                <option selected disabled>Seleccione el botón de Bootstrap a mostrar</option>
                                <option value="primary">Primario</option>
                                <option value="secondary">Secundario</option>
                                <option value="success">Éxito</option>
                                <option value="danger">Peligro</option>
                                <option value="warning">Advertencia</option>
                                <option value="info">Información</option>
                                <option value="light">Ligero</option>
                                <option value="dark">Oscuro</option>
                            </select>
                            <?php
                                if (isset($_COOKIE['boton'])){
                                    $cb = $_COOKIE['boton'];
                                    $boton = "btn btn-".$_COOKIE['boton']." btn-lg";
                                }
                                else{
                                    $cb = "info";
                                    $boton ="btn btn-info btn-lg";
                                }
                            ?>
                            <p>El Boton Seleccionado fue: <span class="p-3 text-<?=$cb;?> border border-primary-subtle rounded-3"> "<?=$boton;?>"</span></p>
                            <input type="submit" class="<?=$boton; ?>" name="operar" value="Determinar Boton">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>