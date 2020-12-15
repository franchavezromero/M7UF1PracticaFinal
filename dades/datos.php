<?php
    class Persona{
        public $nom;
        public $pass;

        public function __construct($nom, $pass)
        {
            $this->nom= $nom;
            $this->pass = $pass;
        }
        public function __toString(){
            return "Usuari: $this->nom, Clau: $this->pass";
        }
    }
?>

<!--<a href="signin.php">Volver Sign in</a>
<a href="index.html">Volver Inicio</a>-->