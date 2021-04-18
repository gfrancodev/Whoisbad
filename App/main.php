<?php
require_once "vendor/autoload.php";
use Whoisbad\Daring\database\Whois;

$whois = new Whois("Gustavo", "gustavo.com.br");
$whois->getWhois();