<?php

interface IwhoisProvider
{
   public static function filter(string $input, string $output, string $content): string;

   public function fetch(string $site): string;
}

class Whois implements IwhoisProvider
{
    public static function filter(string $input, string $output, string $content): string
    {
        $find = explode($input, $content)[1];
        return explode($output, $content)[1];
    }

    public function fetch(string $site): string
    {
        return shell_exec("whois {$site}");
    }

}

class fetchWhoisUseCase {
    private $whoisProvider;

    public function __construct(
        IwhoisProvider $whoisProvider
    ) {
        $this->whoisProvider = $whoisProvider;
    }

    public function execute($request): string
    {
        return $this->whoisProvider->fetch($request);
    }
}

class fetchWhoisGateway {
    private $fetchWhoisUseCase;

    public function __construct(
        fetchWhoisUseCase $fetchWhoisUseCase
    ) {
        $this->fetchWhoisUseCase = $fetchWhoisUseCase;
    }

    public function handle(string $url): string
    {

            return $this->fetchWhoisUseCase->execute($url);

    }
}

$whoisProvider = new Whois;

$fetchWhoisUseCase = new fetchWhoisUseCase(
    $whoisProvider
);

$fetchGateway = new fetchWhoisGateway(
  $fetchWhoisUseCase
);

print $fetchGateway->handle("gustavo.com.br");





