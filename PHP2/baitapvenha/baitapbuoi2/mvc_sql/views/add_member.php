<form action="" method="POST" role="form">
	<legend>Thêm mới học viên</legend>
	<div class="form-group">
		<label for="">Họ tên<span style="color: red;"> *</span></label>
		<input type="text" required class="form-control" name="name" placeholder="Họ tên học viên...">
	</div>
	<div class="form-group">
		<label for="gender">Giới tính</label>
	</div>
	<div class="form-group">
		<input type="radio" id="gender" checked name="gender" value="1"> Nam
		<input type="radio" id="gender" name="gender" value="0"> Nữ
	</div>
	<div class="form-group">
		<label for="">Khoa</label>
		<select name="faculty" id="" class="form-control">
			<?php
				foreach ($listFaculty as $value) {
			?>
				<option value="<?=$value['id'];?>"><?=$value['title'];?></option>
			<?php
				}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;"> *</span></label>
		<input type="number" required class="form-control" name="phone" placeholder="Số điện thoại...">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="mail" class="form-control" require name="e_mail" placeholder="it-plus@gmail.com">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;"> *</span></label>
		<input type="text" required class="form-control" name="addres" placeholder="Địa chỉ học viên...">
	</div>
	<button type="submit" name="add_member" class="btn btn-primary">Thêm mới</button>
</form>