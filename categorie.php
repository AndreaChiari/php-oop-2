<?php

class Categoria
{
    public $nome_animale;

    public function __construct($nome_animale)
    {
        $this->nome_animale = $nome_animale;
    }
}

$cani = new Categoria('cani');
$gatti = new Categoria('gatti');
