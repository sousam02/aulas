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

    public function trocarMarcha()
    {
        echo "Desengatar embreagem com a mão e engatar a marcha com o pé";
    }
}

class Caminhao extends Veiculo
{
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

    public function frear()
    {
        echo "frear";
    }

    public function trocarMarcha()
    {
        echo "Desengatar embreagem com o pé e engatar marcha com a mão";
    }
}
$carro = new Carro("abc1234", "Branco");
$moto  = new Moto("def9988", "preta");
$caminhao  = new Caminhao("def9988", "preta");

$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();
echo '<br>';
$caminhao->trocarMarcha();
