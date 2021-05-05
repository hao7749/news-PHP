<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>任动新闻Admin</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="./public/js/css/layui.css">
		<link rel="stylesheet" type="text/css" href="./public/css/admin.css"/>
	</head>

	<body id="body">
		<nav id="nav">
			<h1>欢迎来到任动新闻管理页,再苦的日子也不要忘记微笑。😄</h1>
		</nav>
		<div id="main">
			<ul id="sidebar" class="layui-nav layui-nav-tree" lay-filter="test">
				<li class="layui-nav-item layui-nav-itemed clic">
					<a href="javascript:;">所有新闻</a>
				</li>
				<li class="layui-nav-item layui-nav-itemed clic">
					<a href="javascript:;">新增新闻</a>
				</li>
				<li class="layui-nav-item layui-nav-itemed clic">
					<a href="javascript:;">修改新闻</a>
				</li>
				<!-- 替换a标签链接 -->
				<li class="layui-nav-item layui-nav-itemed clic">
					<a href="javascript:;">删除新闻</a>
				</li>
				<li class="layui-nav-item layui-nav-itemed">
					<a href="javascript:;">待开发</a>
				</li>
				<li class="layui-nav-item layui-nav-itemed">
					<a href="javascript:;">待开发</a>
				</li>
			</ul>
			<div id="chief">
				<div class="all-plate">
					<h2>所有新闻</h2>
					<table>
						<thead>
							<tr>
								<td>新闻标题</td>
								<td>新闻作者</td>
								<td>新闻id</td>
							</tr>
						</thead>
						
						<tbody>
							<?php
						require "./controller/dataTreating.php";
						for($i = 0; $i < count($data); $i++) {
							echo "<tr>
								<td>{$data[$i]['news_title']}</td>
								<td>{$data[$i]['News_author']}</td>
								<td>{$data[$i]['news_id']}</td>
							</tr>";
						}
						?>
						</tbody>
					</table>
				</div>
				<!--增加块-->
				<div class="add-plate">
					<h2>增加新闻</h2>
					<form class="layui-form" action="./view/add.php" method="post">
						<div class="layui-form-item">
							<label class="layui-form-label">新闻标题</label>
							<div class="layui-input-block">
								<input type="text" name="title" required lay-verify="required" placeholder="请输入新闻标题" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">新闻作者</label>
							<div class="layui-input-block">
								<input type="text" name="author" required lay-verify="required" placeholder="请输入新闻作者" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">发布时间</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="time" id="time1" placeholder="yyyy-MM-dd HH:mm:ss">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">新闻类型</label>
							<div class="layui-input-block">
								<input type="radio" name="type" value="0" title="要闻" checked>
								<input type="radio" name="type" value="1" title="热点">
								<input type="radio" name="type" value="2" title="专题">
							</div>
						</div>
						<div class="layui-form-item layui-form-text">
							<label class="layui-form-label">新闻内容</label>
							<div class="layui-input-block">
								<textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
							</div>
						</div>
						<div class="layui-form-item">
							<div class="layui-input-block">
								<input style="display: none;" value="add" type="text" name='sub'  />
								<button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
								<button type="reset" class="layui-btn layui-btn-primary">重置</button>
							</div>
						</div>
					</form>
				</div>
				<!--修改块-->
				<div class="alter-plate">
					<h2>修改新闻</h2>
					<table>
						<tr bgcolor="#737383">
							<td>新闻id</td>
							<td>新闻标题</td>
							<td>作者</td>
							<td>点击修改</td>
						</tr>
						<?php
							for($i = 0; $i < count($data); $i++) {
							echo "<tr>
								<td>{$data[$i]['news_id']}</td>
								<td>{$data[$i]['news_title']}</td>
								<td>{$data[$i]['News_author']}</td>
								<td> <a href='./view/modification.php?index={$i}'>修改</a> </td>
							</tr>";
							}
							?>
						
					</table>
				
					
				</div>
				<!--删除块-->
				<div class="delete-plate">
					<h2 style="color: red;">删除新闻此操作不可逆，一旦点删除就没得后悔了</h2>
					<table>
						<thead>
							<tr>
								<td>新闻标题</td>
								<td>新闻作者</td>
								<td>新闻id</td>
								<td>删除新闻</td>
							</tr>
						</thead>
						<tbody>
							<?php
									for($i = 0; $i < count($data); $i++) {
							echo	"<tr>
								<td>{$data[$i]['news_title']}</td>
								<td>{$data[$i]['News_author']}</td>
								<td>{$data[$i]['news_id']}</td>
								<td class='dele'><a href='./view/delete.php?id={$data[$i]['news_id']}'>删除</a></td>
							</tr>";
							}
								?>
							
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<script src="./public/js/layui.js"></script>
		<script>
			//Demo
			layui.use('form', function() {
				var form = layui.form;
				//监听提交
				form.on('submit(formDemo)', function(data) {
					layer.msg('完成提交');
					
				});
			});
			
			layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  //执行一个laydate实例
  laydate.render({
    elem: '#time1', //指定元素
    format: 'yyyy-MM-dd HH:mm:ss' 
  });
});

			let clic = document.querySelectorAll('.clic');
			let all_plate = document.querySelector('.all-plate');
			let add_plate = document.querySelector('.add-plate');
			let alter_plate = document.querySelector('.alter-plate');
			let delete_plate = document.querySelector('.delete-plate');

			for(let i = 0; i < clic.length; i++) {
				clic[i].addEventListener('click', () => {
					if(i === 0) {
						all_plate.style.display = 'block'
						add_plate.style.display = 'none'
						alter_plate.style.display = 'none'
						delete_plate.style.display = 'none'
					} else if(i === 1) {
						all_plate.style.display = 'none'
						add_plate.style.display = 'block'
						alter_plate.style.display = 'none'
						delete_plate.style.display = 'none'
					} else if(i === 2) {
						all_plate.style.display = 'none'
						add_plate.style.display = 'none'
						alter_plate.style.display = 'block'
						delete_plate.style.display = 'none'
					}else {
						all_plate.style.display = 'none'
						add_plate.style.display = 'none'
						alter_plate.style.display = 'none'
						delete_plate.style.display = 'block'
					}
				})
			}
		</script>
	</body>

</html>