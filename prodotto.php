<?php


/**
 *
 */
class Prodotti
{
  public $codice;
  public $prezzo;
  public $ubicazione;
  public $id;

  function __construct($codice, $prezzo)
  {
    $this-> codice = $codice;
    $this-> prezzo = $prezzo;

  }

}


 ?>
