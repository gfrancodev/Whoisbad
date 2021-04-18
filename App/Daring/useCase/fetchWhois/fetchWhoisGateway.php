<?php
namespace Whoisbad\Daring\useCase\fetchWhois;

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