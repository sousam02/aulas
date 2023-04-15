<?php

class Pai
{
    private $nome = "Jorge";
    protected $sobrenome = "Silva";
    public $humor = "Feliz";

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}

$pai = new Pai();
echo $pai->__get("nome");
echo "<br>";
$pai->__set("nome", "Moises");
echo "<br>";
echo $pai->__get("nome");
echo "<br>";
echo $pai->__get('sobrenome');
echo "<br>";
$pai->__set('sobrenome', "Sousa");
echo "<br>";
echo $pai->__get('sobrenome');
