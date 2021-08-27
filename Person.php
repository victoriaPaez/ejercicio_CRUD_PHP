<?php
require_once('Conection.php');

class Person{

    //crean las propiedades del objeto
    public $id;
    private $email;
    private $password;
    protected $conection;
    
   
    public function __construct($email,$password){
        $this->email=$email;
        $this->password=$password;
        $newconection = new Conection;//INSTANCIAR LA CLASE CONECTION.PHP
        $this->conection=$newconection->init();//INVOCA EL METODO INIT() CREADO EN LA CLASE CONECTION.PHP
    }

    public function getId(int $id){
        return $this->id;
    }

    /////

    public function getByEmail(string $email){
        $busqueda=$_REQUEST["email"];
        $sql="SELECT email FROM usuario where email=?";
        $resultado=$this->conection->prepare($sql);
        $resultado->execute(array($busqueda));
        while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
            return $resultado;
        }
        $resultado->closeCursor();
        
    }

    public function getAccess(){
        return $this->email;
    }

    ///////

    public function getByPassword(string $password){
        $busqueda=$_REQUEST["email"];
        $sql="SELECT pasword FROM usuario where email=?";
        $resultado=$this->conection->prepare($sql);
        $resultado->execute(array($busqueda));

        while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
             return $registro['pasword'];
        }
        $resultado->closeCursor();
    }

    public function getAccessP(){
        return $this->password;
      
    }



    

}

?>