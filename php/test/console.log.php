<?
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/25
 * Time: 11:12
 */
function console_log($data){
    if(is_array($data) ||is_object($data)){
        echo"<script> console.log('".json_encode($data)."')</script>";
    }else{
        echo"<script>console.log('$data')</script>";
    }
}
//demo
//function console_log($data)
//{
//    if (is_array($data) || is_object($data))
//    {
//        echo("<script>console.log('".json_encode($data)."');</script>");
//    }
//    else
//    {
//        echo("<script>console.log('".$data."');</script>");
//    }
//}
$x = "hello  conso";
$y = ["arr1",["arr2","arr2"],"arr3"];

console_log($x);
console_log($GLOBALS[x]);
console_log($y);
?>

