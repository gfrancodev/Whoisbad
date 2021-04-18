<?php
namespace Whoisbad\Daring\database;

class Whois {
    protected int $id;
    public string $name;
    public string $url;

    public function __construct($name, $url)
    {
        $this->id = rand(1000, 0);
        $this->name = $name;
        $this->url = $url;
    }

    public function getWhois()
    {
        print $this->id. $this->name. $this->url;
    }
}