<?php
/**
 * Este script simula el lanzamiento de un dado e imprime el número por pantalla además de la hora que se tiro el dado
 * @autor Antonio Ramón Verdugo García <antonioverdugogarcia@gmail.com>
 * @version 1.1.1
 * @license /url/a/ GPL
 */
//inicializa con un número aleatorio entero dentro del rango
$Numero_Dado = mt_rand(1, 6);

/**
 * Esta función devuelve un string que es el valor en texto del parámetro entero que recibimos.
 * Según el valor que recibimos con el switch devolvemos un texto u otro.
 * @package esta función pertenece al paquete juego
 * @version 1.0
 * @param integer $Numero_Dado número aleatorio
 * @return string Valor en texto del número que sale de tirar el dado
 */

function dado($Numero_Dado)
{
  //inicializa
  $numText = "";

  // llamando a la declaración switch
  switch ($Numero_Dado) {
    case 1:
      $numText = "Uno";
      break;
    case 2:
      $numText = "Dos";
      break;
    case 3:
      $numText = "Tres";
      break;
    case 4:
      $numText = "Cuatro";
      break;
    case 5:
      $numText = "Cinco";
    case 6:
      $numText = "Seis";
      break;
    default:
      $numText = "desconocido";
  }

  return $numText;

}


/**
 * Esta funcion devuelve la hora formateada
 * @version 1.0
 * @see hora()
 * @return date
 */

function hora()
{
  date_default_timezone_set("Europe/Madrid");
  $hora = date('h:i:s A');
  return $hora;
}

$numText = dado($Numero_Dado);
//Muestra el resultado
echo 'El dado muestra el número ' . $numText . '.' . "\n";
echo "";
echo "La hora es " . hora() . "\n";

?>
