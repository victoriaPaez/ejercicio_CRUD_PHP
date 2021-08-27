<?php

class Conection{

    public function init(){
     
        $servername="localhost";
        $username="prueba";
        $password="prueba";
        $dbname="adsi";
        $port="3306";
      
        try {
            $conexion = new PDO("mysql:host=$servername;dbname=$dbname;port=$port",$username,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            //echo "conexion exitosa";
            return $conexion;
            
        }catch(PDOException $e){
            echo "connection failed: I'm Sorry".$e->getMessage();
        }finally{
            $conexion=null;
        }
  

    }
}
