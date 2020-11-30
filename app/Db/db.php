<?php

class Db
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql2", "root", "clave123", "aplicacionz");
        return $conexion;
    }
}
