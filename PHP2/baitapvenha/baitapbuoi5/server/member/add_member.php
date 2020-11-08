<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $gender  = $_POST['gender'];
    $faculty = $_POST['faculty'];
    $addres  = $_POST['addres'];
    $email   = $_POST['email'];
    
    // echo $name." ".$phone." ".$gender." ".$faculty." ".$addres." ".$email;
    $add = $data->addStudent_c($name,$faculty,$phone,$email,$addres,$gender);
    if($add){
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;font-weight:bold;'>Thêm thành công!</h1>" ;
    }else{
        echo "<h1 class='animate__animated animate__flipInY' style='animation-duration: 3s;color:red;'>Thêm thất bại!</h1>" ;
    }
?>