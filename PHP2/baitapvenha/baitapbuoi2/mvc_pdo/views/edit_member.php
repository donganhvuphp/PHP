<form action="" method="POST" role="form">
	<legend>Sửa thông tin học viên</legend>
	<input type="number" name="id" value="<?=$info[0]['idstd'];?>" style="display: none;">
	<div class="form-group">
		<label for="">Họ tên<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="name" value="<?=$info[0]['name']?>" />
	</div>
	<div class="form-group">
		<input type="radio" id="gender" <?php if($info[0]['gender'] == 1) echo "checked";?> name="gender" value="1"> Nam
		<input type="radio" id="gender" <?php if($info[0]['gender'] == 0) echo "checked";?> name="gender" value="0"> Nữ
	</div>
	<div class="form-group">
		<label for="">Khoa</label>
		<select name="faculty" id="" class="form-control">
			<?php
				foreach ($listFaculty as $value) {
			?>
				<option <?php if($info[0]['title'] == $value['title']) echo "selected";?> value="<?=$value['id'];?>"><?=$value['title'];?></option>
			<?php
				}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;">*</span></label>
		<input type="number" required class="form-control" name="phone" value="<?=$info[0]['phone']?>">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="mail" class="form-control" name="e_mail" value="<?=$info[0]['email']?>" />
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="addres" value="<?=$info[0]['addres']?>"/>
	</div>
	<button type="submit" name="update_member" class="btn btn-primary">Cập nhật</button>
</form>