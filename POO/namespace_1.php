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

namespace B;

class Cliente implements \A\CadastroInterface
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

    public function salvar()
    {
        echo "salvar";
    }
}

interface CadastroInterface
{
    public function remover();
}

$c = new \B\Cliente();
echo '<br>';
print_r($c);
echo $c->__get("nome");
