<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Manejo de Cookies II</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>MANEJO DE COOKIES II</h3>
                        <p>Cookie Existente: <span class="text-warning">
                                <?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail']; ?>
                            </span>
                        </p>
                        <form class="row g-3 needs-validation" action="cookies.php" method="POST" novalidate>
                            <div class="col-md-6">
                                <label for="mailusuario" class="form-label">Correo:</label>
                                <input type="email" class="form-control" id="mailusuario" name="mailusuario" 
                                       value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail']; ?>" required>
                                <div class="valid-feedback">Correo Válido</div>
                                <div class="invalid-feedback">Debe suministrar un Correo Válido.</div>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" class="form-check-input" id="op1" name="opcion" value="recordar" checked required>
                                <label class="form-check-label me-3" for="op1">Recordar</label>
                                <input type="radio" class="form-check-input" id="op2" name="opcion" value="norecordar" required>
                                <label class="form-check-label" for="op2">No Recordar</label>
                            </div>
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-warning btn-lg" name="crear" value="Confirmar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/validarform.js"></script>
</body>

</html>
