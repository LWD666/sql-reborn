<?php
require_once('reborn.php');
$sql = 'use test;';
$retval = mysqli_query($conn,$sql);
$sql = 'DELETE FROM `book` WHERE name = "A"';
 
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据删除成功\n";
mysqli_close($conn);
?>