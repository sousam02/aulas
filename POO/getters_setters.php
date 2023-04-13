<?php
// Modelo

class Funcionario
{
    //atributos
    private $nome = null;
    private $telefone = null;
    private $numeroFilhos = null;

    // getters setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNumeroFilhos($numeroFilhos)
    {
        $this->numeroFilhos = $numeroFilhos;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNumeroFilhos()
    {
        return $this->numeroFilhos;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    //Métodos
    public function resumirCadFunc()
    {
        return $this->getNome() . " possui " . $this->getNumeroFilhos() . " filho(s)";
    }

    public function modificarNumFilhos($numeroFilhos)
    {
        //afetar um atributo do objeto
        $this->numeroFilhos = $numeroFilhos;
    }
}

$funcionario = new Funcionario();
$funcionario->setNome("José");
$funcionario->setNumeroFilhos(3);
// echo $funcionario->resumirCadFunc() . "<br>";

echo $funcionario->getNome() . " possui " . $funcionario->getNumeroFilhos() . " filho(s)";
$funcionario->modificarNumFilhos(1);

echo $funcionario->resumirCadFunc();
