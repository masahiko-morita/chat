<?php
     function Leap($year){
         if($year % 400 ==0){
             return true;
         }
         elseif($year % 100 ==0){
             return false;
         }
         elseif($year % 4 ==0){
             return true;
         }
         else{
             return false;
         }
     }
?>     
     
