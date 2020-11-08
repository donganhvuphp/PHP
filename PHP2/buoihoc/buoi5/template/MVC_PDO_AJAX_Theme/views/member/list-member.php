<form action="" method="POST" style="margin-top: 30px;">
	
	<div class="form-group">
		<input type="number" id="phone_search" class="form-control" placeholder="Nhập số điện thoại cần tìm...">
	</div>

	<button type="submit" name="submit" class="btn btn-primary">Tìm kiếm</button>
</form>

<p id="noti"></p> <!-- Hiển thị thông báo -->
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Mã SV</th>
				<th>Họ tên SV</th>
				<th>Nơi sinh</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody id="view_data">
			
		</tbody>
	</table>
</div>