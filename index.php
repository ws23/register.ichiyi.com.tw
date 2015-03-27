<!Doctype html>
<html>
<head>
	<meta charset="utf8" />
	<link rel="stylesheet" href="3.3.4/css/bootstrap.min.css" />
	<script src="3.3.4/js/bootstrap.min.hs"></script>
	<title>愛奇藝股份有限公司 - Seminar Register</title>
</head>	

<body>

<div class="jumbotron">
	<div class="container">
		<h1>Seminar Information</h1>
		<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		


		<form action="reg.php" method="post">
			<h3>報名人數</h3>
			<select name="sel">
			<?php
				for($i=1;$i<=50;$i++)
					echo "<option value\"{$i}\">{$i} 人</option>"; 
			?>
			</select>
			<input class="btn btn-success" type="submit" value="submit" />
		</form>
	</div>
</div>
</body>
