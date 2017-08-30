

<?php
$con = mysqli_connect("localhost", "root", "root");
if (mysqli_connect_errno($con))
{
    die('Could not connect: ' . mysqli_connect_error());
}

$db_selected = mysqli_select_db($con,"yx");

mysqli_close($con);

?>

