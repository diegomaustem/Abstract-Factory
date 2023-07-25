<?php 

interface AbstractBancoFactory 
{
    public function getFinanciamento(float $valor) : Financiamento;
    public function getSeguro(float $valorAvaliado, array $coberturas) : Seguro;
}