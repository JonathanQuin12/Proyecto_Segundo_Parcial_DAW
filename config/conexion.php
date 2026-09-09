<?php
//*Conexion centralizada a la base de datos*//
//Todos los modelos utilizaran este archivo para acceder a MySQL.//

class Conexion
{
    public static function conectar()
    {
        $host = getenv('DB_HOST') ?: "mysql-3ddca2b7-josuacoba761-6875.l.aivencloud.com";
        $puerto = getenv('DB_PORT') ?: 23014;
        $bd = getenv('DB_NAME') ?: "defaultdb";
        $usuario = getenv('DB_USER') ?: "avnadmin";
        $clave = getenv('DB_PASS') ?: "TU_CONTRASEÑA_DE_AIVEN";

        $conn = new mysqli($host, $usuario, $clave, $bd, (int)$puerto);

        if ($conn->connect_error) {
            die("Error de conexion: " . $conn->connect_error);
        }

        return $conn;
    }
}
