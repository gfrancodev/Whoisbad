<?php
namespace Whoisbad\Daring\providers;

interface IwhoisProvider
{
    public function fetch(string $site): string;
}
