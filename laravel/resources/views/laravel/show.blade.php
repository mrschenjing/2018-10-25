<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>序号</th>
		<th>email</th>
	</tr>
	<?php foreach ($list as $k => $v) { ?>
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->email}}</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>