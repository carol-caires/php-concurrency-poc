<?php

$runtime = new \parallel\Runtime();

$future = $runtime->run(function(){
    for ($i = 1; $i <= 10; $i++) {
        sleep(.5);
        echo $i." parallel thread\n";
    }
    return "end";
});

for ($i = 1; $i <= 10; $i++) {
    sleep(.5);
    echo $i." main thread\n";
}

echo $future->value()."\n";