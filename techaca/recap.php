<?php
     date_default_timezone_set("Asia/Tokyo");
     print ("今、" . date("H時") . "です。");
     if(date("H") >= 0 && date("H") <= 9){
         print("\n" . "そうくん大好き。");
     }
     elseif(date("H") <=15){
         print("\n" . "だいき大好き。");
     }
     else{
         print("\n" . "ちゃっきー大好き。");
     }
?>
