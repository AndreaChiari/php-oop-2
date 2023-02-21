<?php
require_once __DIR__ . '/prodotti.php';



class Cibo extends Prodotti
{
    public $scadenza;
    public $tipo;


    public function __construct($nome, $img, $prezzo, $descrizione, $marca, $scadenza, $tipo, Categoria $categoria)
    {
        parent::__construct($nome, $img, $prezzo, $descrizione, $marca, $categoria);
        $this->scadenza = $scadenza;
        $this->tipo = $tipo;
    }
}
