<?php
     $n = 50;
     $sum = 0;
     for ($i = 9; $i <= $n; $i++) {
     $sum += $i;
}
     print ($sum) . "\n";
     
     if($sum>900){
         print "900より大きい";
     }
     else{
         print "900以下";
     }
?>
