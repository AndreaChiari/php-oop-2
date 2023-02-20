<?php
require_once __DIR__ . '/prodotti.php';



class Gioco extends Prodotti
{
    public $consistenza;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $consistenza)
    {
        parent::__construct($nome, $prezzo, $img, $descrizione, $marca);
        $this->consistenza = $consistenza;
    }
}
