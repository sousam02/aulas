<?php

class Pai
{
    private $nome = "Jorge";
    protected $sobrenome = "Silva";
    public $humor = "Feliz";

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        // Um exemplo de regra de negócio para modificar atributos de um objeto
        if (strlen($nome) >= 3) {
            $this->nome = $nome;
        }
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        // Um exemplo de regra de negócio para modificar atributos de um objeto
        if (strlen($sobrenome) >= 3) {
            $this->sobrenome = $sobrenome;
        }
    }
}

$pai = new Pai();
echo $pai->getNome();
echo "<br>";
$pai->setNome("Moises");
echo "<br>";
echo $pai->getNome();
echo "<br>";
echo $pai->getSobrenome();
echo "<br>";
$pai->setSobrenome("Sousa");
echo "<br>";
echo $pai->getSobrenome();
