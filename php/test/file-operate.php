<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/19
 * Time: 10:45
 */

//写入 w    增加 a
$myfile = fopen("./operate/testfile.txt", "w") or die("Unable to open file!");
$myfile2 = fopen("./operate/testfile1.txt","a");
echo($myfile);
$txt = "Bill Gates \r\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs \n";
fwrite($myfile, $txt);
fclose($myfile);


