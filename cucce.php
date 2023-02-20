<?php
require_once __DIR__ . '/prodotti.php';



class Cuccia extends Prodotti
{
    public $grandezza;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $grandezza, array $categoria)
    {
        parent::__construct($nome, $img, $prezzo, $descrizione, $marca, $categoria);
        $this->grandezza = $grandezza;
        $this->categoria = $categoria;
    }
}
