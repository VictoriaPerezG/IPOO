<?php

/*2. Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de
atención de la tienda), estado (abierta o cerrada), dirección y dueño. El atributo dueño debe referenciar a un
objeto de la clase Persona implementada en el punto 1. Defina en la clase los siguientes métodos:
a) Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los métodos de acceso de cada uno de los atributos de la clase.
c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
encontrarse abierta en ese horario y false en caso contrario.
d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre.
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos
implementados.*/

class Disquera{

    //atributos de la clase
    private $hora_desde;//horario atencion al clienta
    private $hora_hasta;//horario atencion al clienta
    private $estado;//abierta o cerrada
    private $direccion;
    private $objDuenio;

    //metodo constructor
    public function __construct($apertura,$cierre,$estado,$dire,$objPersona)
    {
        $this->hora_desde = $apertura;
        $this->hora_hasta = $cierre;
        $this->estado = $estado;
        $this->direccion = $dire;
        $this->objDuenio = $objPersona;

    }

    //metodos de acceso
    public function getHoraDesde(){
        return $this->hora_desde;
    }
    public function setHoraDesde($hora){
        $this-> hora_desde = $hora;
    }

    public function getHoraHasta(){
        return $this->hora_hasta;
    }
    public function setHoraHasta($hora){
        $this-> hora_hasta = $hora;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this-> estado = $estado;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($dire){
        $this-> direccion = $dire;
    }

    public function getObjDuenio(){
        return $this->objDuenio;
    }
    public function setObjDuenio($objPersona){
        $this-> objDuenio = $objPersona;
    }

    /**c) dentroHorarioAtencion($hora,$minutos): 
     * que dada una hora y minutos retorna true si la tienda debe encontrarse abierta en ese horario y false en caso contrario.
    * @param int $hora
    * @param  float $minutos
    * @return boolean
    */
    public function dentroHorarioAtencion($hora,$minutos){
        // float $apertura ,$cierre, $visita, boolean $tienda.

        $apertura=$this->getHoraDesde();
        $cierre=$this->getHoraHasta();

        $visita= $hora+$minutos;

        if (($visita>=$apertura)&&($visita<$cierre)) {
           $tienda=true;
        }else{
            $tienda=false;
        }

        return $tienda;
    }

    /**d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
    * @param int $hora
    * @param  float $minutos
    * @return ()
    */
    public function abrirDisquera($hora,$minutos){

        $estado= "Abiero";
        $apertura=$this->getHoraDesde();
        $cierre=$this->getHoraHasta();

        $visita= $hora+$minutos;

        if (($visita>=$apertura)&&($visita<$cierre)) {
            $this->setEstado($estado);
            $esta=$estado;
        }else{
           $esta=$this->getEstado();
        }

        return $esta;
    }

    /**e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre. 
    * @param int $horas
    * @param float $minutos
    * @return ()
    */
    public function cerrarDisquera($hora,$minutos){

        $estado= "Cerrado";
        
        if( $this->dentroHorarioAtencion($hora,$minutos) == false ){
            $esta= $estado; 
            $this-> setEstado($estado); 
        }else{
            $esta = $this->getEstado();
        }
        return $esta;
    }

    //metodo to string: paso los atributos de la clase a una cadena de caracteres
    public function __toString()
    {
        return "Horario apertura: " .$this-> getHoraDesde()."\n".
                "Horario cierre: " .$this-> getHoraHasta()."\n".
                "Estado: " .$this-> getEstado()."\n".
                "Direccion: " .$this-> getDireccion()."\n".
                "Dueño Disquera: " .$this-> getObjDuenio()."\n";

    }

}



