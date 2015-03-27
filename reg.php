<!Doctype html>
<html>
<head>
	<meta charset="utf8" />
	<link rel="stylesheet" href="3.3.4/css/bootstrap.min.css" />
	<script src="3.3.4/js/bootstrap.min.js"></script>
</head>

<body role="document">
	

<div class="jumbotron">
	<div class="container">

	
<?php
	$len = $_POST['sel']; 

?>

<div class="page-header">
	<h1><活動名稱>報名</h2>
</div>

<form action="store.php" method="post">

<div class="row">
<table class="table table-hover">
<thead>
<tr>
	<th class="col-md-1">#</th>
	<th class="col-md-1">姓名</th>
	<th class="col-md-1">聯絡電話</th>
	<th class="col-md-2">Email</th>
	<th class="col-md-2">所屬單位</th>
	<th class="col-md-1">餐飲習慣</th>
</tr>
</thead>
<tbody>
<?php
	for($i=1; $i<=$len; $i++){
?>	
<tr>
	<td><?php echo $i; ?></td>
	<td><div class="form-group"><input type="text" name="name<?php echo $i; ?>" placeholder="Name" class="form-control" /></div></td>
	<td><div class="form-group"><input type="text" name="phone<?php echo $i; ?>" placeholder="Phone" class="form-control" /></div></td>
	<td><div class="form-group"><input type="text" name="email<?php echo $i; ?>" placeholder="Email" class="form-control" /></div></td>
	<td><?php if ($i==1) echo '<div class="form-group"><input type="text" name="company" placeholder="Company" class="form-control" /></div>'; ?></td>
	<td>
		<select name="eat<?php echo $i; ?>" class="form-control">
			<option value="all">葷</option>
			<option value="vege">素</option>
		</select>
	</td>
</tr>
<?php		
	}

?>	
</tbody>
</table>
</div>
	
<input class="btn btn-lg btn-success" type="submit" value="submit">
</form>

	</div>
</div>

</body>

