<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();
    $id = (int)$_POST['id'];

    $faculty = $data->getFacultys_c();

    $student = $data->getEditStudents_c($id);
    
    foreach ($student as $key => $value) {
?>
    <form action="" method="POST" role="form" id="forms_md">
        <legend>Update Student</legend>
        <div class="form-group">
			<input type="number" required class="form-control" value="<?=$id?>" style="display: none;" id="id" name="id">
		</div>
		<div class="form-group">
			<label for="">Họ tên<span style="color: red;"> *</span></label>
			<input type="text" required class="form-control" value="<?=$value['name']?>" id="names" name="name" placeholder="Họ tên học viên...">
		</div>
		<div class="form-group">
			<label for="gender">Giới tính</label>
		</div>
		<div class="form-group">
			<input type="radio" class="genders" <?php if($value['gender'] == 1){echo "checked";}?> name="gender" value="1"> Nam
			<input type="radio" class="genders" <?php if($value['gender'] == 0){echo "checked";}?> name="gender" value="0"> Nữ
		</div>
		<div class="form-group">
			<label for="">Khoa</label>
			<select name="faculty" id="view-facultys" class="form-control">
                <?php
                foreach ($faculty as $fac) {
                    ?>
                        <option <?php if($value['facultys_id'] == $fac['id']) echo "selected"; ?> value="<?=$fac['id']?>"><?=$fac['title']?></option>
                    <?php
                        }
                ?>
			</select>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại<span style="color: red;"> *</span></label>
			<input type="number" required class="form-control" name="phone" id="phones" value="<?=$value['phone']?>" placeholder="Số điện thoại...">
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="mail" class="form-control" require name="email" id="emails" value="<?=$value['email']?>"  placeholder="it-plus@gmail.com">
		</div>

		<div class="form-group">
			<label for="">Địa chỉ<span style="color: red;"> *</span></label>
			<input type="text" required class="form-control" id="address" name="addres" value="<?=$value['addres']?>"  placeholder="Địa chỉ học viên...">
		</div>
		<button type="submit" name="update-student" id="update-student" class="btn btn-primary">Update</button>
	</form>
		
<?php
    }
    
?>
