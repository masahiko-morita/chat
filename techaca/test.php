<?php
     // commenting this code out turs it off!
     // print 'Hello';
     
     // You can do this to multiple lines at once, too!
     
     /*
     print 'Hello'
     print 'Hello'
     print 'Hello'
     */
     
     print 'Only this will run';
     ?>
<?php
     $hensuu = "some data";
     print $hensuu;
?>
<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;
    
    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;
    
    print $ichiniti_no_byousuu;
?>
<?php
     $num = 2;
     var_dump($num);
?>
<?php
     $num = 1.2;
     var_dump($num);
?>
<?php
     $str1 = 'テキスト';
     $str2 = "テキスト";
     var_dump($str1);
     var_dump($str2);
?>
<?php
     $t = true;
     $f = false;
     var_dump($t);
     var_dump($f);
?>
<?php
     $apple = 'リンゴ';
     $banana = "ばなな";
     $orange = 'オレンジ';
?>
<?php
     $fruits = ['リンゴ','ばなな','オレンジ'];
     print $fruits[0] . PHP_EOL;
?>
<?php
     $fruits = ['リンゴ','ばなな','オレンジ'];
     var_dump($fruits);
?>
<?php
     $fruits = ['リンゴ','ばなな','オレンジ'];
     print_r($fruits);
?>
<?php
     $fruits = [
         'apple' => 'リンゴ',
         "banana" => "バナナ",
         'orange' => 'オレンジ',
         ];
         var_dump($fruits);
?>
<?php
     $a;
     var_dump($a);
     $b = null;
     var_dump($b);
?>
<?php
     $ichiniti_no_byousuu = 24 * 60 * 60;
     $hensuu = "some data";
?>
<?php
     $str1 = "文字列1";
     $str2 = " + 文字列2";
     $str = $str1 . $str2;
     print $str;
?>
<?php
     $str1 = "文字列1";
     $str2 = "文字列2";
     $str = $str1 . PHP_EOL . $str2 . PHP_EOL;
     print $str;
?>
<?php
    $result = 1 < 2;
    var_dump($result);
    
    $result = 1==2;
    var_dump($result);
?>

<?php
     if (10>5){
     print "ここだけ表示される" . PHP_EOL;
     }
     
     if (10<= 5){
     print "ここには絶対来ない" . PHP_EOL;
     }
?>
<?php
     if (10==5){
     print "10==5はfalseなのでここは実行されない" . PHP_EOL;
     }
     else{
     print "if側が実行されないので、ここだけ実行される" . PHP_EOL;
     }
?>

<?php
     $number = mt_rand() % 10;
     
     if ($number < 3){
     print $number . "は3より小さい数" . PHP_EOL;
     }
     elseif($number < 6){
     print $number . "は3以上で6より小さい数" . PHP_EOL;     
     }
     elseif($number < 8){
     print $number . "は6以上で8より小さい数" . PHP_EOL;     
     }
     else{
     print $number . "は8か9しか来ません" . PHP_EOL;
     }
?>

<?php
     $number = 0;
     
     while($number != 9){
          $number = mt_rand()%10;
          print $number . PHP_EOL;
          }
?>

<?php
     $count = 0;
     $number = 0;
     
     while($number != 9){
          $number = mt_rand()%10;
          print $number . PHP_EOL;
          $count++;
          
     }
     
     print "9が出るまで" . $count . "回かかった" . PHP_EOL;
          
?>
<?php
     for($i = 0; $i < 30; $i++){
     print $i . "回目" . PHP_EOL;
     }
?>

<?php
     $fruits = ["リンゴ","バナナ","オレンジ","ぶどう","桃"];
     $count = count($fruits);
     for ($i = 1; $i < $count; $i++){
     print $i . "個目の果物： ". $fruits[$i]. PHP_EOL;
     }
?>
<?php
     $fruits = ["リンゴ","バナナ","オレンジ","ぶどう","桃"];
     foreach($fruits as $key => $fruit){
     print $key . "個目の果物： ". $fruit . PHP_EOL;
     }
     // keyがないと何個目の数字は表記されない!
?>



<?php
     function sum($a, $b){
          $result = 0;
          for ($i = $a; $i <= $b; $i++){
               $result = $result + $i;
          }
          return $result;
     }
     $sum1 = sum(1,9);
     $sum2 = sum(1,1000);
     $sum3 = sum(1000,9999);
?> 
<?php
     date_default_timezone_set('Asia/Tokyo');
     $now = date("Y/m/d H:i:s");
     print $now;
?>




