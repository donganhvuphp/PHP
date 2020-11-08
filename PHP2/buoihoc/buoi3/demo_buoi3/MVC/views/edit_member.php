<form action="" method="POST" role="form">
	<legend>Sửa thông tin học viên</legend>

	<div class="form-group">
		<label for="">Họ tên<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="name" value="<?php echo $students['name']; ?>" />
	</div>

	<div class="form-group">
		<label for="">Khoa</label>

		<select name="faculty" id="" class="form-control">
			<?php  
				foreach ($faculty as $key => $value) {
			?>
				<option <?php if($students['facultys_id'] == $value['id']) { echo "selected"; } ?> value="<?php echo $value['id']; ?>">
					<?php echo $value['title']; ?>
				</option>
			<?php
				}
			?>
		</select>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;">*</span></label>
		<input type="number" required class="form-control" name="phone" value="<?php echo $students['phone']; ?>">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="mail" class="form-control" name="e_mail" value="<?php echo $students['email']; ?>" />
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="addres" value="<?php echo $students['addres']; ?>" />
	</div>

	<div class="form-group">
		<input type="radio" checked="" id="gender" name="gender" value="1"> Nam
		<input type="radio" id="gender" name="gender" value="0"> Nữ
	</div>

	<button type="submit" name="update_member" class="btn btn-primary">Cập nhật</button>
</form>