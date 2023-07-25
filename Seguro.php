<?php 

abstract class Seguro
{
    protected float $valorAvaliado;
    protected array $coberturas;

    public function __construct(float $valorAvaliado, array $coberturas)
    {
        $this->valorAvaliado = $valorAvaliado;
        $this->coberturas = $coberturas;  
    }

    public abstract function getValorMensal();
}