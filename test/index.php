<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, 'smtp.gmail.com', 'iau.copiadora@gmail.com', 'copiadora25', 'tls', '587','iau.sti@sc.usp.br', 'Sistema de envio de e-mail');

$novoEmail->sendmail("Envio de teste", "<p>Este é um e-mail de <b>teste</b>!</p>", "iau.sti@sc.usp.br", "Seção Técnica de Informática", "dpicon@gmail.com", "Daniel Picon");

var_dump($novoEmail);
