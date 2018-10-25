<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{url('search')}}" method="post">
	<input type="text" name="search">
	<input type="submit" value="搜索">
</form>

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>序号</th>
		<th>姓名</th>
		<th>手机号</th>
		<th>邮箱</th>
		<th>操作</th>
	</tr>
	<?php foreach ($list as $k => $v) { ?>
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->username}}</td>
			<td>{{$v->telphone}}</td>
			<td>{{$v->email}}</td>
			<td>
				<a href="{{url('del')}}?id={{$v->id}}">删除</a>
				<a href="{{url('first')}}?id={{$v->id}}">修改</a>
			</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>