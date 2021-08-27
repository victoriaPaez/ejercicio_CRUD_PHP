<?php
        require_once('Crud.php');
        $obj=new Crud();
        $datos=$obj->mostrarDatos();

             //
             echo "<br>";
             $tabla='<table class="table table table-bordered table-secondary table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="font-weight-bold">
                                    <td>id</td>
                                    <td>email</td>
                                    <td>pasword</td>
                                    <td>nombre</td>
                                    <td>apellido</td>
                                    <td>alias</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                            </thead>
                            <tbody>';
            
            $datosTabla="";

            foreach($datos as $key => $value){
                $datosTabla=$datosTabla.'<tr>
                                            <td>'.$value['id'].'</td>
                                            <td>'.$value['email'].'</td>
                                            <td>'.$value['pasword'].'</td>
                                            <td>'.$value['nombre'].'</td>
                                            <td>'.$value['apellido'].'</td>
                                            <td>'.$value['alias'].'</td>
                                            <td>
                                                <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                
                                            </td>
                                            <td>
                                                <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
                                                    <li class="fas fa-trash-alt"></li>
                                                </span>
                                            </td>
                                        </tr>';
            
            }
            
            echo $tabla.$datosTabla.'</tbody></table>';
