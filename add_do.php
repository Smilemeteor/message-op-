<?php 
	header('content-type:text/html;charset=utf8');
	mysql_connect('127.0.0.1','root','root');
	mysql_select_db('test');
	mysql_query('set names utf8');
	$title = $_POST['title'];
	$text = $_POST['text'];	
	$time = time();
	$sql = "INSERT INTO message (`title`,`text`,`time`) VALUES ('$title','$text','$time')";
	$res = mysql_query($sql);
	if ($res) {
		echo "<script>alert('留言成功');parent.location.href='show.php'</script>";
	}else{
		echo "<script>alert('留言失败');parent.location.href='add.php'</script>";
	}
 ?>