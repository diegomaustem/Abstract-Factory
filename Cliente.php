<?php 

require_once('BancoBradesco.php');
require_once('BancoInter.php');

class Cliente 
{
    private AbstractBancoFactory $factory;

    public function __construct(string $tipo)
    {
        switch($tipo) {

            case 'casa': 
                $this->factory = new BancoBradesco();
                break;

            case 'veiculo':
                $this->factory = new BancoInter();
                break;
            
            default:
                new InvalidArgumentException('Opção Inválida');
        }
    }

    function getFactory(): AbstractBancoFactory {
        return $this->factory;
    }
}