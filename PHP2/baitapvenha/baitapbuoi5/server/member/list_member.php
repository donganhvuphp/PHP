<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
        $students = $data->searchStudents_c($phone);
    }else{
        $students = $data->getStudent_c();
    }
    foreach ($students as $value) {
?>
    <tr>
        <td><?=$value['name']?></td>
        <td><?=$value['phone']?></td>
        <td><?=$value['email']?></td>
        <td><?=$value['addres']?></td>
        <td>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg" value="<?=$value['id']?>" id="edit-student">Edit</button>
        <button class="btn btn-warning" id="del-student" value="<?=$value['id']?>">Delete</button>
        </td>
    </tr>
    
<?php
    }
?>
<!-- Button trigger modal -->

