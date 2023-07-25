<?php 

require_once('Financiamento.php');

class FinanciamentoHabitacional extends Financiamento
{
    public function getValorMensal(int $quantidadeParcelas): float {
        $taxa       = $this->taxaDeJuros / 100;
        $valParcela = $this->valor * pow((1 + $taxa), $quantidadeParcelas);
        $resultado  = $valParcela / $quantidadeParcelas;

        return $resultado;
    }
}
