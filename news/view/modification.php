<!DOCTYPE HTML>
<html>
	<head>
		<meta charset='UTF-8'/>
		<title></title>
		<link rel='stylesheet' href='../public/js/css/layui.css'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type='text/css'>body {
	background: #4e5465;
}

#conter {
	width: 800px;
	height: 320px;
	margin: 20px auto;
	color: #fff;
}
h2 {
	width: 100%;
	text-align: center;
	margin-bottom: 20px;
}

</style>
	</head>
	<body>
		<div id='conter'>
			
			<h2>仔细修改</h2>
			<?php
			include '../controller/dataTreating.php';
			
				$index = $_GET['index'];
				
			
		echo	"<form class='layui-form' action='./change.php?index=$index'  method='post'>
		
				<div class='layui-form-item'>
					<label class='layui-form-label'>修改标题</label>
					<div class='layui-input-block'>
						<input type='text' name='title' required lay-verify='required' value='{$data[$index]['news_title']}' autocomplete='off' class='layui-input'>
					</div>
				</div>
				<div class='layui-form-item'>
					<label class='layui-form-label'>修改作者</label>
					<div class='layui-input-block'>
						<input type='text' name='author' required lay-verify='required' value='{$data[$index]['News_author']}'  autocomplete='off' class='layui-input'>
					</div>
				</div>
				<div class='layui-form-item'>
					<label class='layui-form-label'>更改时间</label>
					<div class='layui-input-block'>
						<input type='text' name='time' class='layui-input' value='{$data[$index]['release_time']}'>
					</div>
				</div>
				
				<div class='layui-form-item layui-form-text'>
					<label class='layui-form-label'>更改内容</label>
					<div class='layui-input-block'>
						<textarea name='content' class='layui-textarea'>{$data[$index]['news_content']}</textarea>
					</div>
				</div>
				<div class='layui-form-item'>
					<div class='layui-input-block'>

						<button class='layui-btn' lay-submit lay-filter='formDemo'>
						确认修改
						</button>
						<button type='reset' class='layui-btn layui-btn-primary'>
						取消
						</button>
					</div>
				</div>
			</form>";
			
				?>
		</div>
		<script src='../public/js/layui.js'></script>
		<script type='text/javascript'>layui.use('form', function() {
	var form = layui.form;
	//监听提交
	form.on('submit(formDemo)', function(data) {
		layer.msg('完成提交');

	});
});</script>
	</body>
</html>