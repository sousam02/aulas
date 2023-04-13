<?php
// Modelo

class Funcionario
{
    //atributos
    private $nome = null;
    private $telefone = null;
    private $numeroFilhos = null;

    // getters setters Overloading

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }

    // getters setters

    // public function setNome($nome)
    // {
    //     $this->nome = $nome;
    // }

    // public function setNumeroFilhos($numeroFilhos)
    // {
    //     $this->numeroFilhos = $numeroFilhos;
    // }

    // public function setTelefone($telefone)
    // {
    //     $this->telefone = $telefone;
    // }

    // public function getNome()
    // {
    //     return $this->nome;
    // }

    // public function getNumeroFilhos()
    // {
    //     return $this->numeroFilhos;
    // }

    // public function getTelefone()
    // {
    //     return $this->telefone;
    // }

    //Métodos
    public function resumirCadFunc()
    {
        return $this->__get('nome') . " possui " . $this->__get('numeroFilhos') . " filho(s)";
    }

    public function modificarNumFilhos($numeroFilhos)
    {
        //afetar um atributo do objeto
        $this->numeroFilhos = $numeroFilhos;
    }
}

$funcionario = new Funcionario();
$funcionario->__set("nome", "José");
$funcionario->__set("numeroFilhos", 3);
// echo $funcionario->resumirCadFunc() . "<br>";

echo $funcionario->__get('nome') . " possui " . $funcionario->__get('numeroFilhos') . " filho(s)";
$funcionario->modificarNumFilhos(1);

echo $funcionario->resumirCadFunc();
