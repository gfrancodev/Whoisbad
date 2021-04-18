<?php
namespace Whoisbad\Daring\providers\implementations;

use Whoisbad\Daring\providers\IwhoisProvider;

class Whois implements IwhoisProvider
{
    public static function filter(string $input, string $output, string $content): string
    {
        $find = explode($input, $content)[1];
        return explode($output, $find)[0];
    }

    public function fetch(string $site): string
    {
        $whois = shell_exec("whois {$site}");
        $domain = self::filter("domain:", "\n", $whois);

        $verify =  strpos($whois, "whois.registro.br");

        if ($verify === true) {
            print "exite";
        } else {
            print "not exite";
        }

        print $domain;
        return $domain;
    }

}