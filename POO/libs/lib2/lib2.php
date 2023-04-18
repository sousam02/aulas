<?php

namespace B;

class Cliente implements CadastroInterface
{
    public $nome = "Jamilton";

    public function __construct()
    {
        print_r(get_class_methods($this));
    }
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function remover()
    {
        echo "Removido";
    }
}

interface CadastroInterface
{
    public function remover();
}
