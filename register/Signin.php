<?php

    session_start();
    include_once("../dades/datos.php");
    if (isset($_POST['submit'])) {
        $nom = $_POST['name'];
        $pass = $_POST['pass'];

        $_SESSION['usuariactiu'] = new Persona($nom, $pass);
        #print_r ($_SESSION['usuariactiu']);
        echo $_SESSION['usuariactiu'];
    }
?>
<a href="../login/login.html">Log In</a>
