<?php
require_once('reborn.php');
$sql = 'use test;';
$retval = mysqli_query($conn,$sql);
$sql = 'SELECT * FROM `book` WHERE id=1';
 
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据查询成功\n";
mysqli_close($conn);
?>