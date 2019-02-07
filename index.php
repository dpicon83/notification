<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;


$novoEmail = new Email;

$novoEmail->sendmail("Envio de teste", "<p>Este é um e-mail de <b>teste</b>!</p>", "iau.sti@sc.usp.br", "Seção Técnica de Informática", "dpicon@gmail.com", "Daniel Picon");

var_dump($novoEmail);
