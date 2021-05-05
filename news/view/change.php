<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>change</title>
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
/**
 * 修改数据
 */
		include '../controller/dataTreating.php';

		// 连接数据库，因为页面引来引去导致混乱了，不得不在这重新写一个数据库连接方法
		function update($sql) {
			$servername = 'localhost';
			$username = 'root';
			$password = 'root';
			$dbname = 'news';
			$db = new mysqli($servername, $username, $password, $dbname);

			if ($db) {
				// 数据库返回结果true/false
				return $result = mysqli_query($db, $sql);

				$db -> close();
			} else {
				return false;
			}
		}
		
		
		$index = $_GET['index']; // 数组中当前修改数据的下标
		$title = trim($_POST['title']); // 标题
		$author = trim($_POST['author']); // 作者
		$time = trim($_POST['time']); // 时间
		$content = trim($_POST['content']); // 内容

		$crux = $data[$index]["news_id"]; // 获取对应数组的新闻id

		// 修改数据库语句
		$updateSQL = "UPDATE `news_list` SET 
		`news_title`='$title',`News_author`='$author',
		`release_time`='$time',`news_content`='$content'
		WHERE  `news_id`='$crux'";

		
		$result = update($updateSQL);

		if ($result == 1) {
			echo "<h2>新闻修改成功<a href='../admin.php'>返回查看</a></h2>";
		} else {
			"<h2>新闻修改失败<a href='../admin.php'>待会再来吧</a></h2>";
		}
		?>
	</body>
</html>