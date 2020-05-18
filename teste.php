<?php

use app\model\Person;
use app\model\CPF;

require_once 'app/model/Person.php';
require_once 'app/model/CPF.php';

$person = new Person(
    'Caleb', 
    new CPF('123.456.789-10'), 
    '3003-3003', 
    '90000-0000', 
    'caleb@email.com'
);

echo $person->getCpf();