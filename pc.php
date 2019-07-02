<?php
require 'prodotto.php';
require 'brand.php';


class Pc extends Prodotti {
  public $cpu;
  public $ram;
  public $scheda_video;
  public $monitor;
  public $hard_disk;

  // richiamo il trait marca
  use Marca;


  // questi parametri non devono essere per forza quelli definiti sopra
  function __construct($cpu, $ram, $scheda_video, $monitor, $hard_disk, $codice, $prezzo)
  {
    $this-> cpu = $cpu;
    $this-> ram = $ram;
    $this-> scheda_video = $scheda_video;
    $this-> monitor = $monitor;
    $this-> hard_disk = $hard_disk;

    parent::__construct($codice, $prezzo);
  }



}



 ?>
