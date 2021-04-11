<?php
header("Content-Type: application/json; charset=UTF-8");
header("response_code: 200");
header("X-Powered-By: gfrancodev");

//$server = $_SERVER["HTTP_HOST"];

file_get_contents("http://www.google.com");
echo json_encode(var_dump($http_response_header));

$whois = shell_exec("whois.exe -v wilson.com.br > wilson.txt");
echo $whois;
$data = explode("\n", $whois);

echo json_encode([
    "total" => count($data)
]);


