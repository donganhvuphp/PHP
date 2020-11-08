<div class="col-md-6 col-md-push-3">
	<form action="" method="POST" role="form" id="frm_add_member">
		<legend>Sửa thông tin học viên</legend>

		<div class="form-group">
			<label for="">Họ tên<span style="color: red;">*</span></label>
			<input type="text" required class="form-control" id="name" name="name" value="" />
		</div>

		<div class="form-group">
			<label for="">Khoa</label>

			<select name="faculty" id="view_faculty" class="form-control">
				
			</select>
		</div>

		<div class="form-group">
			<label for="">Số điện thoại<span style="color: red;">*</span></label>
			<input type="number" id="phone" required class="form-control" name="phone" value="">
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="mail" id="email" class="form-control" name="e_mail" value="" />
		</div>

		<div class="form-group">
			<label for="">Địa chỉ<span style="color: red;">*</span></label>
			<input type="text" id="addres" required class="form-control" name="addres" value="" />
		</div>

		<div class="form-group">
			<input type="radio" checked="" name="gender" value="1"> Nam
			<input type="radio" name="gender" value="0"> Nữ
		</div>

		<button type="submit" name="add_member" id="add_member" class="btn btn-primary">Thêm mới</button>
	</form>
</div>



<div class="col-md-12">
	<?php 
		include_once 'add-member.php';
		include_once 'list-member.php';
	?>
</div>