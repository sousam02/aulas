<?php

namespace A;

class Cliente implements CadastroInterface
{
    public $nome = "Jorge";

    public function __construct()
    {
        print_r(get_class_methods($this));
    }
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function salvar()
    {
        echo "salvo";
    }
}

interface CadastroInterface
{
    public function salvar();
}
