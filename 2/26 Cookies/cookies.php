<?php
    switch ($_REQUEST['boton']) {
    case "primary":
        setcookie("boton", "primary", time()+60*60*24*365,"/");
        break;
    case "secondary":
        setcookie("boton", "secondary", time()+60*60*24*365,"/");
        break;
    case "success":
        setcookie("boton", "success", time()+60*60*24*365,"/");
        break;
    case "danger":
        setcookie("boton", "danger", time()+60*60*24*365,"/");
        break;
    case "warning":
        setcookie("boton", "warning", time()+60*60*24*365,"/");
        break;
    case "info":
        setcookie("boton", "info", time()+60*60*24*365,"/");
        break;
    case "light":
        setcookie("boton", "light", time()+60*60*24*365,"/");
        break;
    case "dark":
        setcookie("boton", "dark", time()+60*60*24*365,"/");
        break;
    }
    header('location: index.php');
?>