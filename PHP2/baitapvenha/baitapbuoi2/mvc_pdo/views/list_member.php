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
		  		$stt = 1;
		 		foreach($listStudent as $value) {
		  ?>
			<tr>
				<td><?=$stt++;?></td>
				<td><?=$value['name'];?></td>
				<td><?=$value['title'];?></td>
				<td><?=$value['phone'];?></td>
				<td><?=$value['email'];?></td>
				<td><?=$value['addres'];?></td>
				<td>
					<a href="index.php?page=edit_member&id=<?=$value['idstd'];?>">
						<button class="btn btn-primary">Sửa</button>
					</a>
					<a onclick="return confirm('Bạn có muốn xóa sinh viên này không ?');" href="index.php?page=del_member&id=<?=$value['idstd'];?>">
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