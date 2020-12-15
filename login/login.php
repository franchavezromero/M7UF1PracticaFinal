<?php
    include_once("../dades/datos.php");
    session_start();

echo 'pagina cargada'. "</br>";

    echo $_SESSION['usuariactiu']. "</br>";


            $fname = $_POST['fname'];
            $pwd = $_POST['pwd'];

                if ($fname == $_SESSION['usuariactiu']->nom) {
                    echo 'nom correcte'. "<br>";
                    if ($pwd == $_SESSION['usuariactiu']->pass) {
                        echo 'usuario y contraseña correctos'. "</br>";
                        #header('Location: matriculacio.php');
                    }
                } else {
                    echo 'Usuario y contraseña incorrectos'. "</br>";
                }
    ?>