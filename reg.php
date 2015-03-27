<?php
	$len = $_POST['sel']; 

?>
<form action="#" method="post">
<?php
	for($i=1; $i<=$len; $i++){
	?>
		<p>
		<label>報名者<?php echo $i; ?>Name: </label>
			<input type="text"><br />
		<label>報名者<?php echo $i; ?>Other: </label>
			<input type="text"></p>
<?php
	}
?>

	<input type="submit" value="submit">
</form>

