<?php
    $dns = "mysql:host=localhost;dbname=php0720e2_itpluss";
    $user = 'root';
    $pass = '';
    try {
        $pdo = new PDO($dns , $user , $pass);
        $pdo->query("SET NAMES utf8");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    //hiển thị lấy thông tin học viên 
    $sql = "SELECT * FROM tbl_student" ;
    foreach ($pdo->query($sql) as $value) {
        echo  $value['name'];
    }

    $sqlFaculty = "SELECT * FROM tbl_faculty";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $result = $pre->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";


    // tim học vien có id = 6;
    $id = 4;
    $sql2 = "SELECT * FROM tbl_student WHERE id = :idd";
    $pre2 = $pdo->prepare($sql2);
    $pre2->bindParam(':idd', $id );
    $pre2->execute();
    $result2 = $pre2->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result2);
    echo "</pre>";

    //insert
    $faculty_id = 7;
    $name  = 'Nguyễ Hoàng C' ;
    $phone = '0987654321';
    $email = 'hoangc@gmail.com';
    $addres = 'Hà Nội';
    $gender = 0;
    $sql3 = "INSERT INTO tbl_student(facultys_id , name , phone , email, addres, gender ) VALUES(:facultys_id , :name , :phone , :email, :addres, :gender)";
    $pre3 = $pdo->prepare($sql3);
    $pre3->bindParam(':facultys_id',$faculty_id);
    $pre3->bindParam(':name' , $name);
    $pre3->bindParam(':phone' , $phone);
    $pre3->bindParam(':email' , $email);
    $pre3->bindParam(':addres' , $addres);
    $pre3->bindParam(':gender' , $gender);

    $add = $pre3->execute();

    if($add){
        echo "Them sinh viên thành công !";
    }

    $id_del = 23                          ;
    $sql4 = "DELETE FROM tbl_student WHERE id = :idds";
    $pre4 = $pdo->prepare($sql4);
    $pre4->bindParam(':idds', $id_del);
    $del = $pre4->execute();

    if($del){
        echo "Bạn xóa sinh viên thành công";
    }

    
?>