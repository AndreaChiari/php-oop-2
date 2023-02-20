<?php
require_once __DIR__ . '/categorie.php';


class Prodotti
{
    public $nome;
    public $img;
    public $prezzo;
    public $descrizione;
    public $marca;
    public $categorie;


    public function __construct($nome, $prezzo, $descrizione, $marca, $categorie)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->marca = $marca;
        $this->categorie = $categorie;
    }
}
