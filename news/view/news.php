<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" href="../public/css/news.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="continaer">
        <div class="back"><a href="../index.php"> ⬅ 返回</a></div>
        
        <?php
        	require '../controller/dataTreating.php';
			
			if(isset($_GET["index"])) {
				 $index = $_GET['index'];
				 echo 	" <article>
        <h1>{$data[$index]['news_title']}</h1>
        <p>
        {$data[$index]['news_content']}
        </p>
       
        <div class='inscribe'>
            <p>时间 {$data["$index"]['release_time']}</p>
            <p>来源：{$data["$index"]['News_author']}</p>
        </div>
    </article>";
			} 
        	?>
    </div>
    <div id="footer">
        <p>版权所有：huang</p>
        <p>隐私政策 服务条款 粤ICP备10005211号</p>
    </div>
    
</body>
</html>