<?php

$runtime = new \parallel\Runtime();

$future = $runtime->run(function(){
    for ($i = 1; $i <= 10; $i++) {
        sleep(.5);
        echo $i." thread\n";
    }
    return "end";
});

for ($i = 1; $i <= 10; $i++) {
    sleep(.5);
    echo $i." NOT thread\n";
}

echo $future->value()."\n";