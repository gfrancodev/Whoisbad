<?php
namespace Whoisbad\Daring\providers\implementations;

use Whoisbad\Daring\providers\IwhoisProvider;

class Whois implements IwhoisProvider
{
    public function fetch(string $site): string
    {
        return shell_exec("whois {$site}");
    }
}