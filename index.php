<?php
require 'Pessoa.class.php';

$pessoa = new Pessoa('Almeida', '23/11/1987');

echo $pessoa->getNome()." tem ".$pessoa->getIdade()." anos";