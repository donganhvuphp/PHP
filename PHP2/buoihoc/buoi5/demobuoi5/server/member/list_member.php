<?php 
	include_once '../../controller/Member_c.php';
	$mem = new Member_c();
	$students = $mem->getStudents();

	foreach ($students as $value) {
	?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['phone']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['addres']; ?></td>
			<td>
				<button class="btn btn-danger delete-student" value="<?php echo $value['id']; ?>">		
					Delete
				</button>
				<button class="btn btn-primary">Edit</button>
			</td>
		</tr>
	<?php
	}


?>