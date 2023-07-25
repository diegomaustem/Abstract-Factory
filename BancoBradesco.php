<?php 

require_once('AbstractBancoFactory.php');
require_once('FinanciamentoHabitacional.php');
require_once('SeguroResidencial.php');

class BancoBradesco implements AbstractBancoFactory
{
    private const TAXA_JUROS = 0.5;

    public function getFinanciamento(float $valor): FinanciamentoHabitacional {
        return new FinanciamentoHabitacional(self::TAXA_JUROS, $valor);
    }

    public function getSeguro(float $valorAvaliado, array $coberturas): SeguroResidencial {
        return new SeguroResidencial($valorAvaliado, $coberturas);
    }
}