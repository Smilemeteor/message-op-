<?php
header("content-type:text/html;charset=utf-8");//设置字符编码
//连接数据库 mysql_connect()    mysql错误提示：mysql_error()   错误码：mysql_errno()
@mysql_connect('127.0.0.1','root','root')or die("连接失败，错误为".mysql_error());
//选择数据库 mysql_select_db()
mysql_select_db("test");
//设置字符集 set names utf8  mysql_query()执行sql语句
mysql_query("set names utf8");
$sql = "select * from message";
$res = mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留言板</title>
</head>
<body>
  <h4>留言板</h4><hr>
  <a href='add.php'><input type='submit' value='写留言'></a><hr>
  <table width='100%' style='text-align: center;' border='1'>
  <tr>
  <th>编号</th>
  <th>标题</th>
  <th>时间</th>
  <th>内容</th>
  <th>操作</th>
  </tr>
  <?php while($row = mysql_fetch_array($res)) { ?>
  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['title']; ?></td>
  <td>00:00</td>
  <td><?php echo $row['text']; ?></td>
  <td>
    <a href='del.php?id=<?php echo $row['id'];?>'>删除</a>||
    <a href='upd.php?id=<?php echo $row['id'];?>'>修改</a>
  </td>
  </tr>
  <?php } ?>
</body>
</html>