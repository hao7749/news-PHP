<?php
include 'databaseOperation.php';

/**
 * 数据处理
 * */ 

$data = null;

$result = search();

if ($result) { //数据库有返回结果且有内容
	$data = [];
	// 循环将每条数据加入$data  mysqli_num_rows($result)返回多少条数据
	for($i = 0; $i< mysqli_num_rows($result); $i++) {
		// mysqli_fetch_assoc($result) 每一条数据
		array_push( $data, mysqli_fetch_assoc($result));
	}
	
	// 下两行代码按新闻id排序
	$news_id =  array_column($data,'news_id');
	array_multisort($news_id,SORT_DESC,$data); // php5.5以上版本

//	for($j = 0;$j < count($data); $j++) {
//		foreach($data[$j] as $key => $val) {
//			echo  $key ."=>". $val;
//		}
//	}
}
?>