<?php 

require_once('Financiamento.php');

class FinanciamentoVeicular extends Financiamento
{
    public function getValorMensal(int $quantidadeParcelas): float {
        
        $taxa      = $this->taxaDeJuros / 100;
        $m         = $this->valor * (1 + $taxa * $quantidadeParcelas);
        $resultado = $m / $quantidadeParcelas;

        return $resultado;
    }
}
