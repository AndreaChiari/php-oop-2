<?php
require_once __DIR__ . '/categorie.php';

class Prodotti
{
    public $nome;
    public $img;
    public $prezzo;
    public $descrizione;
    public $marca;
    public $categoria;



    public function __construct($nome, $img, $prezzo, $descrizione, $marca, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->img = $img;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->marca = $marca;
        $this->categoria = $categoria;
    }
}
