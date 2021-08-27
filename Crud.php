<?php
require_once('Conection.php');

class Crud extends Conection{
    public function mostrarDatos(){
        $sql ="SELECT id,
                      email,
                      pasword,
                      nombre,
                      apellido,
                      alias
                FROM usuario";
        $query=Conection::init()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        
    }

    public function insertarDatos($datos){
        $sql = "INSERT INTO usuario(email, pasword, nombre, apellido,alias) 
        VALUES(:email,:pasword,:nombre,:apellido,:alias)";
        $query=Conection::init()->prepare($sql);

        $query->bindParam(':email',$datos["email"],PDO::PARAM_STR);
        $query->bindParam(':pasword',$datos["pasword"],PDO::PARAM_STR);
        $query->bindParam(':nombre',$datos["nombre"],PDO::PARAM_STR);
        $query->bindParam(':apellido',$datos["apellido"],PDO::PARAM_STR);
        $query->bindParam(':alias',$datos["alias"],PDO::PARAM_STR);

        return $query->execute();

    }

    public function obtenerDatos($id){
        $sql ="SELECT   id,
                        email,
                        pasword,
                        nombre,
                        apellido,
                        alias
                FROM usuario WHERE id=:id";

        $query=Conection::init()->prepare($sql);
        $query->bindParam(':id',$id,PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }


    public function actualizarDatos($datos){
        $sql ="UPDATE usuario SET   id = :id,
                                    email = :email,
                                    pasword = :pasword,
                                    nombre = :nombre,
                                    apellido = :apellido,
                                    alias = :alias   
                            WHERE id= :id";
        $query=Conection::init()->prepare($sql);

        $query->bindParam(':email',$datos["email"],PDO::PARAM_STR);
        $query->bindParam(':pasword',$datos["pasword"],PDO::PARAM_STR);
        $query->bindParam(':nombre',$datos["nombre"],PDO::PARAM_STR);
        $query->bindParam(':apellido',$datos["apellido"],PDO::PARAM_STR);
        $query->bindParam(':alias',$datos["alias"],PDO::PARAM_STR);
        $query->bindParam(':id',$datos["id"],PDO::PARAM_INT);

        return $query->execute();
    }

    public function eliminarDatos($id){
        $sql="DELETE FROM usuario WHERE id= :id";
        $query=Conection::init()->prepare($sql);
        $query->bindParam(':id',$id,PDO::PARAM_INT);
        return $query->execute();
    }

}

?>