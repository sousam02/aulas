<?php
class MinhaExceptionCustomizada extends Exception
{
    private $erro;

    public function __construct($erro)
    {
        $this->erro = $erro;
    }

    public function exibirMensagemCustomizada()
    {
        echo '<div style="border: 1 px solid #000; padding: 15px; background-color: red; color: white;">';
        echo $this->erro;
        echo '</div>';
    }
}

try {
    throw new MinhaExceptionCustomizada("Esse é um erro de teste");
} catch (MinhaExceptionCustomizada $e) {
    $e->exibirMensagemCustomizada();
}
