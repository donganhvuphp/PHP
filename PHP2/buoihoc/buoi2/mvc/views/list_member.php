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
				$count = 1;
				foreach ($student as $std) {
			?>
				<tr>
					<td><?=$count++;?></td>
					<td><?=$std['name'];?></td>
					<td><?=$std['title'];?></td>
					<td><?=$std['phone'];?></td>
					<td><?=$std['email'];?></td>
					<td><?=$std['addres'];?></td>
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