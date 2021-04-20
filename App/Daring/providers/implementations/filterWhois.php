<?php
namespace Whoisbad\Daring\providers\implementations;

use Whoisbad\Daring\providers\IfilterWhoisProvider;

class filterWhois implements IfilterWhoisProvider {
    protected array $informations;

    public function separator(string $whois): array
    {

    }
}