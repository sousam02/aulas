<?php
// Modelo

class Funcionario
{
    //atributos
    public $nome = "José";
    public $telefone = "11 99999 9999";
    public $numeroFilhos = 2;

    //Métodos
    public function resumirCadFunc()
    {
        return " $this->nome possui $this->numeroFilhos filho(s)";
    }

    public function modificarNumFilhos($numeroFilhos)
    {
        //afetar um atributo do objeto
        $this->numeroFilhos = $numeroFilhos;
    }
}

$funcionario = new Funcionario();
echo $funcionario->resumirCadFunc() . "<br>";

$funcionario->modificarNumFilhos(3);

echo $funcionario->resumirCadFunc();
