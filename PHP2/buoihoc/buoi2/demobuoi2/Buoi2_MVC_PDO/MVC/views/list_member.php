<h4>DANH SÁCH HỌC VIÊN IT-PLUS</h4>

<div class="table-responsive">
	<table class="table table-hover"> 
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Faculty</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Addres</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				$stt = 0;
				foreach ($rs as $value) {
					$stt += 1;
			?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['title']; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['addres']; ?></td>
					<td>
						<a href="#">
							<button class="btn btn-primary">Sửa</button>
						</a>
						<a href="#">
							<button class="btn btn-danger">Xóa</button>
						</a>
					</td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>