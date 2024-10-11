<?php
/*$degisken = true;
$degisken2 =2;
$degisken3 =5.6;
$degisken4 ="Batuhan";
$degisken5 =array("red","blue","yellow");
$degisken6 =new stdClass;
$degisken7 =NULL;
$degisken8 ="30";
echo gettype($degisken)."<br>".
gettype($degisken2)."<br>".
gettype($degisken3)."<br>".
gettype($degisken4)."<br>".
gettype($degisken5)."<br>".
gettype($degisken6)."<br>".
gettype($degisken7)."<br>".
gettype($degisken8)."<br>";*/


/*$sayi=55;
echo "<b>Birinci değişkenin adı:\$sayi</b>"."<br>".
"Değeri:".$sayi."<br>".
"Türü: ".gettype($sayi)."<br>";

$adi="Batuhan";
echo "<b>İkinci değişkenin adı:\$adi</b>"."<br>".
"Değeri:".$adi."<br>".
"Türü: ".gettype($adi)."<br>";

$ondalik=5.1234;
echo "<b>Üçüncü değişkenin adı:\$ondalik</b>"."<br>".
"Değeri:".$ondalik."<br>".
"Türü: ".gettype($ondalik)."<br>";

$mantiksal=true;
echo "<b>Dördüncü değişkenin adı:\$mantiksal</b>"."<br>".
"Değeri:".$mantiksal."<br>".
"Türü: ".gettype($mantiksal)."<br>";*/

//Settype Dönüşümleri Örnek
/*$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";

$b=32;
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";

$c=true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";*/


echo"<h2> PHP SABİTLERİ </h2>"."<br>".
"kodun bulunduğu yer:".(__LINE__)."<br>".
"dosyanın bulunduğu yer:".(__FILE__)."<br>".
"sunucudaki iletişim sistemi:".(PHP_OS)."<br>".
"dosyanın bulunduğu dizin:".(__DIR__);



?>