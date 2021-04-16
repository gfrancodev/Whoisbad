<?php
namespace Whoisbad\providers;

interface IwhoisProvider
{
    public static function filter(string $input, string $output, string $content): string;
    public function fetch(string $site): string;
}
