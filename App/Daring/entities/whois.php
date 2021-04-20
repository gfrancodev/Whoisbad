<?php
namespace Whoisbad\Daring\entities;

final class Whois {

    public function __construct(
        public string $ip,
        public string $domain,
        public string $owner,
        public string $ownerid,
        private string $ownerid_type,
        public string $country,
        public string $nserver,
        public int $chaged,
        public int $expires,
        public string $status,
        public string $person,
        public string $email
    ){

        if (strlen($this->ownerid) <= 14) {
            $this->ownerid_type = "cpf";
        } else {
            $this->ownerid_type = "cnpj";
        }

        $this->chaged = date('d-m-y', $chaged);
        $this->expires = date('d-m-y',$expires);
    }
}

