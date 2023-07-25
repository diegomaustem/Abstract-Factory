<?php 

abstract class Financiamento
{
    protected float $taxaDeJuros;
    protected float $valor;

    public function __construct(float $taxaDeJuros, float $valor)
    {
        $this->taxaDeJuros = $taxaDeJuros;
        $this->valor = $valor;  
    }

    public abstract function getValorMensal(int $quantidadeParcelas): float;
}