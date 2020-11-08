<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();

    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $facultys_id = $_POST['facultys_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addres = $_POST['addres'];
    $gender = $_POST['gender'];

    // echo $name." ".$facultys_id." ".$phone." ".$email." ".$addres." ".$gender." ".$id;
    $update =  $data->updateStudent_c($id,$name,$facultys_id,$phone,$email ,$addres,$gender);
    if($update){
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;font-weight:bold;'>Update thành công!</h1>" ;
    }else{
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;'>update thất bại!</h1>" ;
    }
?>