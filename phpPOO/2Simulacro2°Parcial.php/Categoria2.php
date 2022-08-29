<?php

class Categoria{

    //atributos de clase categoria 
    private $idCategoria;
    private $descripcion;

    //metodo constructor de la clase categoria
    public function __construct($id,$descripcion)
    {
            $this->idCategoria = $id;
            $this->descripcion = $descripcion;

    }

    //metodos de acceso de la clase categoria 
    public function getIdCategoria(){
        return $this->idCategoria;
    }
    public function setIdCategoria($id){
        $this->idCategoria = $id;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($desc){
        $this->descripcion = $desc;
    }

    

    //metodo to string de la clase categoria
    public function __toString()
    {
        
        $cadena = "ID CATEGORIA: ". $this->getIdCategoria()."\n". 
               "DESCRIPCION: ". $this->getDescripcion()."\n";

        return $cadena;       

    }


}