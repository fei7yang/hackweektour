<?php

$dbhost = 'localhost:8888';  // mysql服务器主机地址
$dbuser = 'root@localhost';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功<br />';

// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");

$sequence = '1';
$pic_name = 'image1.jpg';
$ip_address = '192.168.1.1';
$frequency = '10';
$date = '2017.9.30';

$sql = "INSERT INTO like_statistics".
        "(sequence, pic_name, ip_address, frequency, date) ".
        "VALUES ".
        "('$sequence','$pic_name','$ip_address', '$frequency', '$date')";



mysqli_select_db( $conn, 'like_post' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);

?>
