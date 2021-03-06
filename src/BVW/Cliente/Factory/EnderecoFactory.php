<?php

namespace BVW\Cliente\Factory;

use BVW\Cliente\Endereco;
use BVW\Cliente\Interfaces\ClienteInterface;

class EnderecoFactory
{
    /**
     * Creates an Endereco object, adds it to cliente and returns the cliente object
     * 
     * @param string $logradouro
     * @param string $numero
     * @param string $complemento
     * @param string $bairro
     * @param string $cidade
     * @param string $uf
     * @param string $cep
     * @param boolean $isBillingAddress
     * @param ClienteInterface $cliente
     * @return Endereco
     */
    public function create($logradouro, $numero, $complemento, $bairro, $cidade, $uf, $cep, $isBillingAddress)
    {
        $end = new Endereco();
        $end->setLogradouro($logradouro)
            ->setNumero($numero)
            ->setComplemento($complemento)
            ->setBairro($bairro)
            ->setCidade($cidade)
            ->setUf($uf)
            ->setCep($cep)
            ->setIsBillingAddress($isBillingAddress)
        ;
        
        return $end;
    }    
    
}
