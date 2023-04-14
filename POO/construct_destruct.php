<?php

class Pessoa
{
    public $nome = null;

    // Função que é executada automaticamente quando o objeto é instanciado
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function correr()
    {
        return $this->__get("nome") . " está correndo";
    }

    // Função executada automaticamente quando a classe é destruida
    public function __destruct()
    {
        echo "Objeto removido";
    }
}

$pessoa = new Pessoa("Jorge");

echo "Nome: " . $pessoa->__get("nome");
echo "<br>" . $pessoa->correr();
echo "<br>";
unset($pessoa);
