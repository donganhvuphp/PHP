<?php
    include_once '../../controller/Member_c.php';
    $data = new Member_c();
    $faculty = $data->getFacultys_c();
    foreach ($faculty as $value) {
?>
    <option value="<?=$value['id']?>"><?=$value['title']?></option>
<?php
    }
?>