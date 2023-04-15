<?php
class Exemplo
{
    public static $atributo1 = "Eu sou um atributo estático";
    public $atributo2 = "Eu sou um atributo normal";

    public static function metodo1()
    {
        echo "Eu sou um método estático";
    }
    public function metodo2()
    {
        echo "Eu sou um método normal";
    }
}

echo Exemplo::$atributo1;
echo "<br>";
Exemplo::metodo1();
echo "<br>";
// É possivel acessar métodos não estáticos, porém nao é recomendado que isso seja feito
Exemplo::metodo2();

$x = new Exemplo();
// Por ser um atributo estático, não é possivel acessá-lo dessa maneira
echo $x->atributo1;
