<?php
require_once __DIR__ . '/categorie.php';

class Prodotti
{
    public $nome;
    public $img;
    public $prezzo;
    public $descrizione;
    public $marca;



    public function __construct($nome, $prezzo, $descrizione, $marca)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->marca = $marca;
    }
}
