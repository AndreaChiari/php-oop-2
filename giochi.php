<?php
require_once __DIR__ . '/prodotti.php';



class Gioco extends Prodotti
{
    public $consistenza;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $consistenza, array $categoria)
    {
        parent::__construct($nome, $prezzo, $img, $descrizione, $marca, $categoria);
        $this->consistenza = $consistenza;
        $this->categoria = $categoria;
    }
}
