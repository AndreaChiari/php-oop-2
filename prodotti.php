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


    public function __construct($nome, $prezzo, $descrizione, $marca, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->marca = $marca;
        $this->categoria = $categoria;
    }

    public function getString()
    {
        $nome_categoria = implode(',', $categoria);
        return $nome_categoria;
    }
}
