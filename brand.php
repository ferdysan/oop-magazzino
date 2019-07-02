<?php


// tutto quello che va nel trait viene copiato e incollato nella classe
trait Marca{
  protected $nome_marca;

  public function stampaMarca(){
    echo $this->$nome_marca;
  }

  public function setMarca($nome_marca){
     $this-> nome_marca =$nome_marca;
  }




}


 ?>
