<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Usuario
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Usuario Attributes
  private $identificacion;
  private $nombre;
  private $apellidos;
  private $fechaNacimiento;

  //Usuario Associations
  private $meme;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdentificacion = null, $aNombre = null, $aApellidos = null, $aFechaNacimiento = null, $aMeme = null)
  {
    if (func_num_args() == 0) { return; }

    $this->identificacion = $aIdentificacion;
    $this->nombre = $aNombre;
    $this->apellidos = $aApellidos;
    $this->fechaNacimiento = $aFechaNacimiento;
    if ($aMeme == null || $aMeme->getUsuario() != null)
    {
      throw new Exception("Unable to create Usuario due to aMeme. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->meme = $aMeme;
  }
  public static function newInstance($aIdentificacion, $aNombre, $aApellidos, $aFechaNacimiento, $aNumeroForMeme, $aDescripcionForMeme, $aCategoriaForMeme, $aCalificacionForMeme)
  {
    $thisInstance = new Usuario();
    $thisInstance->identificacion = $aIdentificacion;
    $thisInstance->nombre = $aNombre;
    $thisInstance->apellidos = $aApellidos;
    $thisInstance->fechaNacimiento = $aFechaNacimiento;
    $thisInstance->meme = new Meme($aNumeroForMeme, $aDescripcionForMeme, $thisInstance, $aCategoriaForMeme, $aCalificacionForMeme);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdentificacion($aIdentificacion)
  {
    $wasSet = false;
    $this->identificacion = $aIdentificacion;
    $wasSet = true;
    return $wasSet;
  }

  public function setNombre($aNombre)
  {
    $wasSet = false;
    $this->nombre = $aNombre;
    $wasSet = true;
    return $wasSet;
  }

  public function setApellidos($aApellidos)
  {
    $wasSet = false;
    $this->apellidos = $aApellidos;
    $wasSet = true;
    return $wasSet;
  }

  public function setFechaNacimiento($aFechaNacimiento)
  {
    $wasSet = false;
    $this->fechaNacimiento = $aFechaNacimiento;
    $wasSet = true;
    return $wasSet;
  }

  public function getIdentificacion()
  {
    return $this->identificacion;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getApellidos()
  {
    return $this->apellidos;
  }

  public function getFechaNacimiento()
  {
    return $this->fechaNacimiento;
  }

  public function getMeme()
  {
    return $this->meme;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingMeme = $this->meme;
    $this->meme = null;
    if ($existingMeme != null)
    {
      $existingMeme->delete();
    }
  }
  
  public function imprimir_nombre_clase(){
	  echo "Clase Usuario<br>";
  }

}
?>