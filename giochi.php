<?php
require_once __DIR__ . '/prodotti.php';



class Gioco extends Prodotti
{
    public $consistenza;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $consistenza, Categoria $categoria)
    {
        parent::__construct($nome, $img, $prezzo, $descrizione, $marca, $categoria);
        $this->consistenza = $consistenza;
    }
}
