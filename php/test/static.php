<?
echo "static x++ y++";
function add(){
    $x = 1;
    echo "<br>x=".$x++;
    static $y = 1;
    echo "<br>y=".$y++;
}
add();
add();
ADd();
echo $y;
?>