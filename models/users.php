<?php



class Consultas{

    public function showUsers(){
        $objectConexion = new Conexion();
        $conexion = $objectConexion -> get_conexion();

        $querySelect = "SELECT * FROM users";
        $results = $conexion -> prepare($querySelect);
        $results -> execute();

        $dataResults = null;
        while($statement = $results -> fetch()){
            $dataResults[] = $statement;
        }
        
        // return data in array.
        return $dataResults;

    }

}