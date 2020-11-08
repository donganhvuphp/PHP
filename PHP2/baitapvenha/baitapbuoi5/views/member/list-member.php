<form action="" method="POST" style="margin-top: 30px;">
	
	<div class="form-group">
		<input type="number" id="phone_search" class="form-control" placeholder="Nhập số điện thoại cần tìm...">
	</div>

	<button type="submit" style="display: none;" id="data-search" name="submit" class="btn btn-primary">Tìm kiếm</button>
</form>

<div id="notify"></div> <!-- Hiển thị thông báo -->
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Addres</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="view_data">
				
		</tbody>
	</table>
</div>