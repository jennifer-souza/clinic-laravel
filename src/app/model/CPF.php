<?php

namespace app\model;

final class CPF
{
    private $cpf;

    public function __construct(string $cpf)
    {
        //talvez colocar uma function validaCpf()
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }
}