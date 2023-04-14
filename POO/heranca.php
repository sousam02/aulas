<?php


class Carro extends Veiculo
{
    public $teto_solar = true;
    public function abrirTetoSolar()
    {
        echo "abrirTetoSolar";
    }

    public function alterarPosicaoVolante()
    {
        echo "alterar posicao volante";
    }
}

class Moto extends Veiculo
{
    public $contraPesoGuidao = true;

    public function empinar()
    {
        echo "empinar";
    }
}

class Veiculo
{
    public $placa;
    public $cor;

    public function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
    public function acelerar()
    {
        echo "acelerar";
    }
}
echo "Carro: ";
$carro = new Carro("abc1234", "Branco");
$carro->acelerar();
echo "<hr>";
echo "Moto: ";
$moto  = new Moto("def9988", "preta");
$moto->empinar();
