<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/25
 * Time: 13:41
 */
echo "array";
echo "<br>";
$arr = array("123",456,"789");
for($i=0;$i<count($arr);$i++){
    echo "arr[$i]=".$arr[$i];echo "<br>";
};
echo "count(arr)=".count($arr)."<br>";

echo "<br>";
$arr1 = array("123",456,"789",a=>"10,11");
echo "count(arr1)=".count($arr1)."<br>";
for($i=0;$i<count($arr1);$i++){
    echo "arr[$i]=".$arr1[$i];echo "<br>";
};
foreach($arr1 as $key=>$value){
    echo "key:$key".",value:".$value;echo "<br>";
}

?>
<h3>sort排序</h3>
<?
$arr2 = [3,6,4,3,3,2,6,2,5];
sort($arr2);
foreach($arr2 as $a=>$value){
    echo"$a:$value<br>";
}

?>
