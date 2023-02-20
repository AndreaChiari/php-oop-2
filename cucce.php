<?php
require_once __DIR__ . '/prodotti.php';



class Cuccia extends Prodotti
{
    public $grandezza;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $grandezza)
    {
        parent::__construct($nome, $img, $prezzo, $descrizione, $marca);
        $this->grandezza = $grandezza;
    }
}
