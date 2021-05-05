<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>add</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}
		
		h2 {
			width: 100%;
			height: 300px;
			line-height: 300px;
			text-align: center;
			margin: 50px auto 0;
		}

</style>
	<body>
		<?php
		/**
		 * 增加数据
		 * */
		include '../controller/databaseOperation.php';
		$title = trim($_POST['title']); // 标题
		$author =trim($_POST['author']);// 作者
		$type = trim($_POST['type']); // 类型
		$time =trim($_POST['time']); // 时间
		$content =trim($_POST['content']); // 内容
		$id = time(); // id时间戳
		
		// 增加数据语句
		$insertSQL = "INSERT INTO `news_list`
		 (`news_id`,`news_title`, `News_author`,  `release_time`, `news_content`, `new_type`)
		 VALUES ($id,'$title','$author','$time' ,'$content',$type);";
		
		$result = add($insertSQL);
		
		if($result) { // 发布成功
				echo  "<h2>新闻发布成功<a href='../admin.php'>返回查看</a></h2>";
			}else { // 发布失败
				echo  "<h2>新闻发布失败<a href='../admin.php'>回去再来吧</a></h2>";
			}
		?>
	</body>
</html>