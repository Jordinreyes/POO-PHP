<?php 

/**
 * Creo la clase Person con los siguientes objeto
 * @var string nombre  -> Nombre de la persona
 * @var int edad -> Edad de la persona
 */

class Person
{
    public $nombre, $edad;

    /**
     * Constructor donde tiene la propiedades
     */
    public function __construct($nombre, $edad){
        if(empty($nombre) && empty($edad)){
            throw new Exception("No puede dejar los campos vacios");
        }
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    /**
     *  @return string La informaciond del objeto
    */    
    public function showInformation(){
        return "Hola, Mi nombre es $this->nombre y tengo $this->edad años";
    }
}

try{
    $newName = new Person("Jordin", "21");
    echo $newName->showInformation();
}catch(Exception $e){
    echo "<b>Error: </b> " . $e->GetMessage();
}