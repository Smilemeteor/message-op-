<?php
header("content-type:text/html;charset=utf-8");//设置字符编码
//连接数据库 mysql_connect()    mysql错误提示：mysql_error()   错误码：mysql_errno()
mysql_connect('127.0.0.1','root','root')or die("连接失败，错误为".mysql_error());
//选择数据库 mysql_select_db()
mysql_select_db("test");
//设置字符集 set names utf8  mysql_query()执行sql语句
mysql_query("set names utf8");
$id = $_GET['id'];
$sql = "delete from message where id=$id";
$res = mysql_query($sql);
if($res){
	echo "<script>alert('删除成功');location.href='show.php'</script>";
}else{
	echo "删除失败！错误为".mysql_error();
	header("refresh:5;url=show.php");die;
}
?>