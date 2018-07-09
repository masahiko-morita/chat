<?php
     function display_hello($num){
         for($i = 1; $i<=$num; $i++){
              print("$i" . "回目のこんにちは!" . "\n");
         }
     }
     print display_hello(15);
?>