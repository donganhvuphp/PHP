<?php 
	include_once '../../controller/Member_c.php';
	$mem = new Member_c();
	$faculty = $mem->getFacultys();

	echo "<pre>";
	print_r($faculty);
	echo "</pre>";

	foreach ($faculty as $key => $value) {
?>
	<option value="<?php echo $value['id']; ?>">
		<?php echo $value['title']; ?>
	</option>
<?php
	}
?>