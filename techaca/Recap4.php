<?php
     function get_area_triangle($base,$height){
         $triangle = 1/2 * $base * $height;
         print("この三角形の面積は" . "$triangle" . "㎠です。");
     }
     
     print get_area_triangle(20000,10000);
?>     
