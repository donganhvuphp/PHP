<h4>DANH SÁCH HỌC VIÊN IT-PLUS</h4>

<form action="" method="POST">
	<div class="input-group">
	    <input type="number" name="key" required="" class="form-control" placeholder="Nhập số điện thoại cần tìm" aria-describedby="basic-addon2" value="<?php if(isset($key)) {echo $key;} ?>">

	  	<span class="input-group-addon" id="basic-addon2">
	  		<button type="submit" name="submit">Tìm kiếm</button>
	  	</span>
	  
	</div>
</form>


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
						<a href="index.php?page=students&method=edit&id=<?php echo $value['id']; ?>">
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

	<?php  
		echo $datePage;
		if (isset($datePage) && $datePage > 0) {
	?>
		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <?php  
		    	for ($i = 1; $i <= $datePage; $i++) { 
		    ?>
		    	<li>
		    		<a href="index.php?pages=<?php echo $i; ?>"><?php echo $i; ?>
		    		</a>
		    	</li>
		    <?php
		    	}
		    ?>
		    
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	<?php
		}
	?>
</div>