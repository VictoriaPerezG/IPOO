<?php

/*16. Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos:
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los método de acceso de cada uno de los atributos de la clase.
c) Método toString() que retorne la información de los atributos de la clase.
d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como
parámetro una editorial y devuelve un valor verdadero/falso.
e) iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por parámetro ya se
encuentra en dicha colección.
f) aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.
g) librodeEditoriales($arregloautor, $peditorial): método que retorna un arreglo asociativo con
todos los libros publicados por la editorial dada.
h) Cree un script TestLibro que cree al menos tres libros e invoque a cada uno de los
métodos implementados.*/

class Libro{

    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreAutor;
    private $apellidoAutor;

    public function __construct($id,$titulo,$anio,$editorial,$nombre,$apellido)
    {
        $this->isbn = $id;
        $this->titulo = $titulo;
        $this->anioEdicion = $anio;
        $this->editorial = $editorial;
        $this->nombreAutor = $nombre;
        $this->apellidoAutor = $apellido;

    }

    public function getIsbn(){
        return $this->isbn;
    }
    public function setIsbn($id){
        $this-> isbn =$id;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this-> titulo =$titulo;
    }

    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function setAnioEdicion($anio){
        $this-> anioEdicion =$anio;
    }

    public function getEditorial(){
        return $this->editorial;
    }
    public function setEditorial($editorial){
        $this-> editorial =$editorial;
    }

    public function getNombreAutor(){
        return $this->nombreAutor;
    }
    public function setNombreAutor($nombre){
        $this-> nombreAutor =$nombre;
    }

    public function getApellidoAutor(){
        return $this->apellidoAutor;
    }
    public function setApellidoAutor($apellido){
        $this-> apellidoAutor =$apellido;
    }

    ///////////////////
    public function __toString()
    {
        return "DATOS DEL LIBRO \n".
                "ISBN: " .$this->getIsbn()."\n".
                "Titulo Libro: " .$this->getTitulo()."\n".
                "Año Edicion: " .$this->getAnioEdicion()."\n".
                "Editorial: " .$this->getEditorial()."\n".
                "Nombre y Apellido del autor: " .$this->getNombreAutor() ." " .$this->getApellidoAutor();

    }

    /*d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como
    parámetro una editorial y devuelve un valor verdadero/falso*/
    public function perteneceEditorial($peditorial){

        $editorial = $this->getEditorial();

        if($editorial == $peditorial){
            $es=true;
        }else{
            $es=false;
        }

        return $es;
    }

    /*e) iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por parámetro ya se
    encuentra en dicha colección.*/
    public function iguales($plibro,$parreglo){

       

        for ($i=0; $i < count($parreglo) ; $i++) { 
           if (condition) {
               # code...
           }
        }
                    

        
    }

    //f) aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.
    public function aniosDesdeEdicion(){
        $anioEdicion=$this->getAnioEdicion();
        $anioActual=2022;

        $aniosAntiguedad= $anioActual - $anioEdicion;
        return $aniosAntiguedad;
    }


    /*g) librodeEditoriales($arregloautor, $peditorial): método que retorna un arreglo asociativo con
    todos los libros publicados por la editorial dada.*/
    public function libroEditorial($arregloautor, $peditorial){
        
    }
}
