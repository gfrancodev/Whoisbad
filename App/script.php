<?php
ini_set('memory_limit', '4086M');
$db = file_get_contents("domain.csv");

function filterDomain($input, $output, $domain) {
    $find = explode($input, $domain)[1];
    return explode($output, $find)[0];
}

$lines = explode( "\n", $db);
$rows =  count($lines);
for ($init = 0; $rows > $init; $init++) {
    $verify = strpos($lines[$init], ".br");
    if ($verify === false) {
        print "não tem";
    } else {
        $result = filterDomain('","', '","', $lines[$init]);
        $file = fopen("domains.txt", "a w+");
        fwrite($file, sprintf("%s\n", $result));
    }
}
