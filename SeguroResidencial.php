<?php 

require_once('Seguro.php');

class SeguroResidencial extends Seguro
{
    public function getValorMensal() {

        $adicionais = count($this->coberturas) * 100;
        $resultado  =  (($this->valorAvaliado * 0.01) + $adicionais) / 12;

        return $resultado;
    }
}
