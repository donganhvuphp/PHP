
<div class="col-md-6 col-md-push-3" style="margin: 0px auto;">
	<form action="" method="POST" role="form" id="frm_add_student">
		<legend>Thêm mới học viên</legend>
		<div class="form-group">
			<label for="">Họ tên<span style="color: red;"> *</span></label>
			<input type="text" required class="form-control" id="name" name="name" placeholder="Họ tên học viên...">
		</div>
		<div class="form-group">
			<label for="gender">Giới tính</label>
		</div>
		<div class="form-group">
			<input type="radio" class="gender" checked name="gender" value="1"> Nam
			<input type="radio" class="gender" name="gender" value="0"> Nữ
		</div>
		<div class="form-group">
			<label for="">Khoa</label>
			<select name="faculty" id="view-faculty" class="form-control">
				
			</select>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại<span style="color: red;"> *</span></label>
			<input type="number" required class="form-control" name="phone" id="phone" placeholder="Số điện thoại...">
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="mail" class="form-control" require name="email" id="email" placeholder="it-plus@gmail.com">
		</div>

		<div class="form-group">
			<label for="">Địa chỉ<span style="color: red;"> *</span></label>
			<input type="text" required class="form-control" id="addres" name="addres" placeholder="Địa chỉ học viên...">
		</div>
		<button type="submit" name="add_member" id="add_member" class="btn btn-primary">Thêm mới</button>
	</form>
</div>

<div class="col-md-12">
	<?php 
		include_once 'edit_member.php';
		include_once 'list-member.php';
	?>
</div>