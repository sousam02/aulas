<?php
interface EquipamentoEletronicoInterface
{
    public function ligar();
    public function desligar();
}


class Geladeira implements EquipamentoEletronicoInterface
{
    public function abrirPorta()
    {
        echo "abrir a porta";
    }

    public function ligar()
    {
        echo "ligar";
    }

    public function desligar()
    {
        echo "desligar";
    }
}

class Tv implements EquipamentoEletronicoInterface
{
    public function trocarCanal()
    {
        echo "trocar canal";
    }

    public function ligar()
    {
        echo "Ligar Tv";
    }

    public function desligar()
    {
        echo "desligar Tv";
    }
}
// ==================================================================

interface MamiferoInterface
{
    public function respirar();
}

interface TerrestreInterface
{
    public function andar();
}

interface AquaticoInterface
{
    public function nadar();
}


class Humano implements MamiferoInterface, TerrestreInterface
{

    public function respirar()
    {
        echo "respirando";
    }
    public function andar()
    {
        echo "andando";
    }

    public function conversar()
    {
        echo "conversar";
    }
}

class Baleia implements AquaticoInterface, MamiferoInterface
{
    public function nadar()
    {
        echo "nadando";
    }
    public function respirar()
    {
        echo "respirando";
    }

    protected function esguichar()
    {
        echo "esguichar";
    }
}

// =========================================================

interface AnimalInterface
{
    public function comer();
}

interface AveInterface extends AnimalInterface
{
    public function voar();
}


class Papagaio implements AveInterface
{
    // Obrigatório implementar o método voar de AveInterface e o método comer que AveInterface herda de Animal Interface
    public function comer()
    {
        echo "comendo";
    }
    public function voar()
    {
        echo "voando";
    }
}
