<form action="reg.php" method="post">
	<label>報名人數</label><br />
	<select name="sel">
	<?php
		for($i=1;$i<=50;$i++)
			echo "<option value\"{$i}\">{$i} 人</option>"; 
	?>
	</select>
	<input type="submit" value="submit" />
</form>
