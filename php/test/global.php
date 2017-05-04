<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/25
 * Time: 14:12
 */
//foreach($GLOBALS as $key=>$value){
//    echo $key.":".$value."<br><ul>";
//    foreach($value as $key2 =>$value2){
//        echo "<li>".$key2.":".$value2."</li>";
//    };
//    echo"</ul>";
//}
echo $_SERVER."<br>";
foreach($_SERVER as $key=>$value){
    echo $key.":".$value."<br>";
//    foreach($value as $key2 =>$value2){
//        echo "".$key2.":".$value2."<br>";
//    };
}
