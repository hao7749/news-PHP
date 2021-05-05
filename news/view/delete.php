<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>delete</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<style type="text/css">* {
	padding: 0;
	margin: 0;
}

h2 {
	width: 100%;
	height: 300px;
	line-height: 300px;
	text-align: center;
	margin: 50px auto 0;
}</style>
	<body>
		<?php
		include '../controller/databaseOperation.php';
		// 传进来的是新闻id
		$id = $_GET['id'];

		// 删除语句根据新闻id删
		$deleteSQL = "DELETE FROM `news_list` WHERE `news_id`='$id'";

		// 执行增加数据方法
		$result = add($deleteSQL);

		if ($result == 1) {
			echo "<h2>新闻删除成功<a href='../admin.php'>返回查看</a></h2>";
		} else {
			"<h2>新闻删除失败<a href='../admin.php'>待会再来吧</a></h2>";
		}
	?>
	</body>
</html>