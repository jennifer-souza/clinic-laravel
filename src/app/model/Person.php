<?php

namespace app\model;

use app\model\CPF;

class Person
{
    protected string $name;
    private CPF $cpf;
    private string $phone;
    private string $cellphone;
    private string $email;


    public function __construct($name, $cpf, $phone, $cellphone, $email) 
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->cellphone = $cellphone;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function setCpf(string $cpf)
    {
        //tenho minhas dúvidas de como é o set vindo de outra classe
        $this->cpf->setCpf = $cpf;
        //$this->cpf->setCpf($cpf);
    }

    //talvez colocar uma function de validaNome

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    public function setCellphone(string $cellphone)
    {
        $this->cellphone = $cellphone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}