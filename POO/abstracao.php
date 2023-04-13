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
        return " $this->nome ";
    }

    public function modificarNumFilhos()
    {
        //afetar um atributo do objeto
    }
}

$funcionario = new Funcionario();
echo $funcionario->resumirCadFunc();
