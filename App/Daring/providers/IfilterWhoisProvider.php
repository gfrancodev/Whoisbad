<?php
namespace Whoisbad\Daring\providers;

interface IfilterWhoisProvider {
    public function separator(string $whois): array;
}

