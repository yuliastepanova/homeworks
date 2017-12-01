<?php

/*$num = 25;
$sinys = sin($num);
$stepen = pow($sinys, 2);
echo $res = round($stepen);

function sumFind ($arg1, $arg2){
   echo $sum=$arg1 + $arg2;
}
sumFind (5,8);


$login = "i love Gomel";
echo strlen($login);
echo substr($login, 0, 3);


$str = "Minsk is the capital of Belarus";
if (strlen($str) > 10) {
echo mb_strimwidth($str, 0, 11);
}

$lett = array('a','b','c','d','e','f','g');
echo str_replace ($lett, ' ', $str);
*/

$text = " <div class='refnamediv'>
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class='refpurpose'><span class='refname'>htmlspecialchars</span> —
<span class='dc-title'>Любой текст</span></p>
</div>";
echo $str = strip_tags($text);
echo strlen($str);
?>