<?php
require_once "../../../vendor/autoload.php";
use Whoisbad\Daring\providers\implementations\Whois;
use Whoisbad\Daring\useCase\fetchWhois\fetchWhoisUseCase;
use Whoisbad\Daring\useCase\fetchWhois\fetchWhoisGateway;

$whoisProvider = new Whois;

$fetchWhoisUseCase = new fetchWhoisUseCase(
    whoisProvider: $whoisProvider
);

$fetchGateway = new fetchWhoisGateway(
  fetchWhoisUseCase: $fetchWhoisUseCase
);

$objeto = $fetchGateway->handle("ihcriei.com.br");

$var = array($objeto);




