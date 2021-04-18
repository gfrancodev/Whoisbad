<?php
namespace Whoisbad\Daring\useCase\fetchWhois;

use Whoisbad\Daring\providers\IwhoisProvider;

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