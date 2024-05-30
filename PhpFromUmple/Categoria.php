<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Categoria
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Categoria Attributes
  private $codigo;
  private $nombre;
  private $descripcion;

  //Categoria Associations
  private $meme;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aCodigo = null, $aNombre = null, $aDescripcion = null, $aMeme = null)
  {
    if (func_num_args() == 0) { return; }

    $this->codigo = $aCodigo;
    $this->nombre = $aNombre;
    $this->descripcion = $aDescripcion;
    if ($aMeme == null || $aMeme->getCategoria() != null)
    {
      throw new Exception("Unable to create Categoria due to aMeme. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->meme = $aMeme;
  }
  public static function newInstance($aCodigo, $aNombre, $aDescripcion, $aNumeroForMeme, $aDescripcionForMeme, $aUsuarioForMeme, $aCalificacionForMeme)
  {
    $thisInstance = new Categoria();
    $thisInstance->codigo = $aCodigo;
    $thisInstance->nombre = $aNombre;
    $thisInstance->descripcion = $aDescripcion;
    $thisInstance->meme = new Meme($aNumeroForMeme, $aDescripcionForMeme, $aUsuarioForMeme, $thisInstance, $aCalificacionForMeme);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setCodigo($aCodigo)
  {
    $wasSet = false;
    $this->codigo = $aCodigo;
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

  public function setDescripcion($aDescripcion)
  {
    $wasSet = false;
    $this->descripcion = $aDescripcion;
    $wasSet = true;
    return $wasSet;
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
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
	  echo "Clase Categoria<br>";
  }

}
?>