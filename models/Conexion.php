<?php 

class Conexion{
    public static function get_conexion(){
        $user = 'root';
        $host = 'localhost';
        $password = '';
        $database = 'DB_practiceProject';

        try{
            $conexion = new PDO("mysql:host=$host;dbname=$database;", $user, $password);
            return $conexion;
        } catch (PDOException $e){ // $e =  PDOException 
            echo 'Data base has a error'.$e -> getMessage();
            print $e -> getCode();
            print $e -> getFile();
            print $e -> getTrace();
            die;
        }
    }
}