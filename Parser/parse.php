<?php
require __DIR__ . '/vendor/autoload.php';

use App\Parser;

$test = json_decode(file_get_contents(__DIR__ . '/misc/test.json'));

$parser = new Parser();

foreach ($test as $currentTest) {
    echo "$currentTest->url: ";

    $url = $parser->parse($currentTest->url);
    if ($currentTest->result === null) {
        echo ($url === null ? "OK" : "KO") . "\n";
    } else {
        if (
            $url !== null
            && $currentTest->result->type === $url->getType()
            && $currentTest->result->id === $url->getId()
        ) {
            echo "OK\n";
        } else {
            echo "KO\n";
        }
    }
}
