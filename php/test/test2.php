<?php
echo 'no';
echo 'yes';
eCho 'yes';
$color = 'red';
$Color = 'green';
echo $color."<br>";
echo $Color;
?>
<?php
function showDiff(){
    $x = '10';
    echo "变量x的值是$x"."<br>";
    echo "$x<br>";
    echo "变量color的值是$color";
}
showDiff();
echo "<br>变量x的值是$x<br>";
?>
<?php
$x=5;
$y=10;
    function add(){
      global$x,$y;
        $y = $x + $y ;
      echo $y;
    }
    add();
    console.log($GLOBALS);
echo($GLOBALS)
?>