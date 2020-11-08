<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();
    $id = (int)$_POST['id'];
    $student = $data->delStudent_c($id);
    if($student){
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;font-weight:bold;'>Xóa thành công!</h1>" ;
    }else{
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;'>Xóa thất bại!</h1>" ;
    }
?>