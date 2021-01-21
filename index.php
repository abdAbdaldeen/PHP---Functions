<?php
//1
function task1($n)
{
    if($n ==0)
    {
        return 1;
    }
    else
    {
        return $n * task1($n-1);
        //or loop from $n to 1 and calculate the factorial.
    }
}
// echo task1(5);
// ======================
// 2
function task2($n)
{
 for($i=2; $i<$n; $i++)
   {
      if($n % $i ==0)
	      {
            echo "Not Prime";
           return 0;
		  }
    }
    echo "Prime";
   }
//    task2(6);
// ======================
// 3
function task3($str)
{
    for ($i=0; $i < strlen($str)/2; $i++) {
        $r= $str[$i];
        $l= $str[strlen($str)-$i-1];
        $str[$i]=$l;
        $str[strlen($str)-$i-1]=$r;
//        echo "l :$l <br>r :$r <br>str :$str <br>";
    }
    var_dump($str);
}
//task3("ABCDE");
// ======================
// 4
function task4($str)
{
    $stringParts = str_split($str);
    sort($stringParts);
    echo implode($stringParts);
}
//task4("XVABCDE");
// ======================
// 5
function task5($str)
{
    $strlower = strtolower($str);
    if ($str===$strlower){
        echo "is lower case";
    }else{
        echo "is not lower case";
    }
}
//task5("aaa11aaAa");
// ======================
// 6
function task6($str)
{
    for ($i=0; $i < strlen($str)/2; $i++) {
        $r= $str[$i];
        $l= $str[strlen($str)-$i-1];
        if ($r===$l){
            continue;
        }
        else{
            echo "string is not a palindrome";
            return 0;
        }
    }
    echo "string is a palindrome";

}
//task6("ABCBA");
// ======================
//7
function task7 ($arr,$n){
    for ($i=0; $i < count($arr)-2; $i++) {
        if ($arr[$i]+$arr[$i + 1]+$arr[$i + 2] == $n)
        echo $arr[$i] ."|". $arr[$i + 1] ."|". $arr[$i + 2]."<br>";
    }
}
task7 (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16);

?>