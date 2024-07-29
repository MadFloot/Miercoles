<?php

    function AbrirBaseDatos()
    {
        return mysqli_connect('127.0.0.1:3306', 'root', '', 'miercoles_bd');
    }

    function CerrarBaseDatos($conexion)
    {
        mysqli_close($conexion);
    }

?>