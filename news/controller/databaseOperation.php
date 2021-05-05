<?php
// 连接数据库函数
function  connect() {
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'news';
	$onedb = new mysqli($servername, $username, $password, $dbname);
	
	if($onedb->connect_error) {
		return false;
	}
	return $onedb;
}

// 增加数据
function add($sql) {
 	// 连接数据库
 	$db = connect();
 		
	if($db) {
		 // 执行增加语句数据库返回结果true/false
		$result = mysqli_query($db, $sql);
	 	
		$db->close();
			
		return $result;
	}
}
// 查询数据
function search() {
	$db =  connect(); // 调用数据库连接方法，获取返回对象
	// 数据查询sql  ORDER BY 'news_id' ASC这段代码好像没啥用
	$querysql = "SELECT * FROM `news_list` ORDER BY 'news_id' ASC";
	
	// 初始化数据
	$result = null;
	
	if($db) { // 判断数据库是否连接成功
		// 查询数据
		$result = mysqli_query($db, $querysql);
		// 判断是否有数据
		if(mysqli_num_rows($result) == 0 ) {
			// 没有数据将结果赋值null	
			return false;
		}
		// 关闭数据库
	$db->close();
	return $result;
	}
}
	
?>