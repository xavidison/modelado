<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Meme
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Meme Attributes
  private $numero;
  private $descripcion;

  //Meme Associations
  private $usuario;
  private $categoria;
  private $calificacion;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aNumero = null, $aDescripcion = null, $aUsuario = null, $aCategoria = null, $aCalificacion = null)
  {
    if (func_num_args() == 0) { return; }

    $this->numero = $aNumero;
    $this->descripcion = $aDescripcion;
    if ($aUsuario == null || $aUsuario->getMeme() != null)
    {
      throw new Exception("Unable to create Meme due to aUsuario. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->usuario = $aUsuario;
    if ($aCategoria == null || $aCategoria->getMeme() != null)
    {
      throw new Exception("Unable to create Meme due to aCategoria. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->categoria = $aCategoria;
    if ($aCalificacion == null || $aCalificacion->getMeme() != null)
    {
      throw new Exception("Unable to create Meme due to aCalificacion. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->calificacion = $aCalificacion;
  }
  public static function newInstance($aNumero, $aDescripcion, $aIdentificacionForUsuario, $aNombreForUsuario, $aApellidosForUsuario, $aFechaNacimientoForUsuario, $aCodigoForCategoria, $aNombreForCategoria, $aDescripcionForCategoria, $aCodigoForCalificacion, $aNombreForCalificacion, $aDescripcionForCalificacion)
  {
    $thisInstance = new Meme();
    $thisInstance->numero = $aNumero;
    $thisInstance->descripcion = $aDescripcion;
    $thisInstance->usuario = new Usuario($aIdentificacionForUsuario, $aNombreForUsuario, $aApellidosForUsuario, $aFechaNacimientoForUsuario, $thisInstance);
    $thisInstance->categoria = new Categoria($aCodigoForCategoria, $aNombreForCategoria, $aDescripcionForCategoria, $thisInstance);
    $thisInstance->calificacion = new Calificacion($aCodigoForCalificacion, $aNombreForCalificacion, $aDescripcionForCalificacion, $thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setNumero($aNumero)
  {
    $wasSet = false;
    $this->numero = $aNumero;
    $wasSet = true;
    return $wasSet;
  }

  public function setDescripcion($aDescripcion)
  {
    $wasSet = false;
    $this->descripcion = $aDescripcion;
    $wasSet = true;
    return $wasSet;
  }

  public function getNumero()
  {
    return $this->numero;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function getCalificacion()
  {
    return $this->calificacion;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingUsuario = $this->usuario;
    $this->usuario = null;
    if ($existingUsuario != null)
    {
      $existingUsuario->delete();
    }
    $existingCategoria = $this->categoria;
    $this->categoria = null;
    if ($existingCategoria != null)
    {
      $existingCategoria->delete();
    }
    $existingCalificacion = $this->calificacion;
    $this->calificacion = null;
    if ($existingCalificacion != null)
    {
      $existingCalificacion->delete();
    }
  }
  
  public function imprimir_nombre_clase(){
	  echo "Clase Meme<br>";
  }

}
?>