<?php
// provate a modellizzare le classi per gestire i prodotti di un magazzino, usando i concetti di classi ed ereditarietà visti oggi a lezione.
// magazzino di elettronica

require 'pc.php';


$notebook_asus = new Pc ('Intel Core I7', ' 8 GB DDR3', 'Nvidia 2080', ' 15,6 pollici', 'SSD 512 GB', 'AVX521Z', 800);


$notebook_asus->setMarca('Asus');

echo '<pre>';
var_dump($notebook_asus);
echo '</pre>';








 ?>
