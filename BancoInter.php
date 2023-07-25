<?php 

require_once('AbstractBancoFactory.php');
require_once('FinanciamentoVeicular.php');
require_once('SeguroVeicular.php');

class BancoInter implements AbstractBancoFactory
{
    private const TAXA_JUROS = 0.7;

    public function getFinanciamento(float $valor): FinanciamentoVeicular {
        return new FinanciamentoVeicular(self::TAXA_JUROS, $valor);
    }

    public function getSeguro(float $valorAvaliado, array $coberturas): SeguroVeicular {
        return new SeguroVeicular($valorAvaliado, $coberturas);
    }
}