<?php
    $n = 15;

print 'fibonacci(' . $n . ') = ';
print fibonacci($n) . "\n";

function fibonacci($n) {
    if ($n === 0) return 0;
    if ($n === 1) return 1;

    return fibonacci($n - 2) + fibonacci($n - 1);
}
    
