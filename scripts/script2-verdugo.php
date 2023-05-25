<?php
/**
 * En este script se implementa la clase Empleado y se prueba creando un objeto Empleado
 * @author Antonio Ramón Verdugo Garcia <antonioverdugogarcia@gmail.com>
 * @version 1.2.0
 */

/**
 * La clase empleado crea objetos empleados para la empresa
 * @author Antonio Ramón Verdugo Garcia <antonioverdugogarcia@gmail.com>
 * @version 1.0.1
 * @copyright (c) 2023
 * @license ruta/a/licence GPL
 */

class Empleado {

    /**
     * Atributo para recoger el nombre del empleado
     * @var string nombre del empleado
    */
    private $nombre;

    /**
     * Atributo para recoger el apellido del empleado
     * @var string apellido del empleado
    */
    private $apellido;

    /**
     * Atributo para recoger la edad del empleado
     * @var integer edad del empleado
    */
    private $edad;

    /**
     * Método constructor con 3 parámetros para instanciar objetos de tipo Empleado
     * @param string $nombre nombre del empleado
     * @param string $apellido apellido del empleado
     * @param integer $edad edad del empleado
     */
    public function __construct($nombre, $apellido, $edad) {

        $this->nombre = $nombre;

        $this->apellido = $apellido;

        $this->edad = $edad;
    }

    /**
     * Método que devuelve el nombre del empleado
     * @return string nombre del empleado
     */
    public function getNombre() {

        return $this->nombre;
    }

    /**
     * Método que devuelve el apellido del empleado
     * @return string apellido del empleado
     */
    public function getApellido() {

        return $this->apellido;
    }

   /**
   * Método que devuelve la edad del empleado
   * @return integer edad del empleado
   */
    public function getEdad() {

        return $this->edad;
    }

    /**
     * Método que devuelve el nombre y el apellido del empleado
     * @return string nombre y apellido del empleado
     */
    public function getNombreCompleto() {

        $nombreCompleto = $this->getNombre() . " " . $this->getApellido();
        return $nombreCompleto;
    }

}

$objEmpleado = new Empleado('Pepe', 'Garcia', 30);
echo $objEmpleado->getNombreCompleto() . "\n";
?>
