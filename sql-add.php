<?php
require_once('reborn.php');
$sql = 'use test;';
$retval = mysqli_query($conn,$sql);
$sql = 'INSERT INTO `book` 
        (name,author, date, score) 
        VALUES  ("A","Jane","2018.12","8")';
 
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>