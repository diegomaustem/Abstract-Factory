<?php 

require_once('Seguro.php');

class SeguroVeicular extends Seguro
{
    public function getValorMensal(): float {

        $adicionais = count($this->coberturas) * 100;
        $resultado  =  (($this->valorAvaliado * 0.1) + $adicionais) / 12;
        
        return $resultado;
    }
}
