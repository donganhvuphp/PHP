function getStudents(){
    $.get('server/member/list_member.php', function(data){
        $('#view_data').html(data);
    })
}
getStudents();

function getFacultys(){
    $.get('server/member/list_faculty.php', function(data){
        $('#view-faculty').html(data);
    })
}
getFacultys();


// xóa sinh viên
$(document).on('click' , '#del-student' ,function(){
    var id = $(this).val();
    var check = confirm('Bạn có muốn xóa sinh viên này không ?');
    if(check){
        $.ajax({
            type: "POST",
            url: "server/member/del_member.php",
            data: {id : id},
            dataType: "html",
            success: function (data) {
                $('#notify').html(data);
                getStudents();
            },
            error : function(){
                console.log('fail');
            }
        });
    }
});

//Thêm sinh viên
$(document).on('click' , '#add_member',function(e){
    e.preventDefault();
    var name = $('#name').val();
    if($("input[type='radio'].gender").is(':checked')){
        var gender = $("input[type='radio'].gender:checked").val();
    }
    var faculty = $("#view-faculty").find(":selected").val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var addres = $('#addres').val();

    // alert(name+" "+gender+" "+faculty+" "+phone+" "+email+" "+addres);
    $.ajax({
        type: "POST",
        url: "server/member/add_member.php",
        data: {name:name , gender :gender , faculty: faculty, phone: phone , email : email, addres: addres},
        dataType: "html",
        success: function (data) {
            $('#notify').html(data);
            getStudents();
            $('#frm_add_student')[0].reset();
        },
        error: function(){
            console.log('fail');
        }
    });
});

$(document).on('click', '#edit-student', function(){
    var id = $(this).val();
    $.ajax({
        type: "POST",
        url: "server/member/edit_member.php",
        data: {id:id},
        dataType: "html",
        success: function (data){
            $('#view-edit-student').html(data);
        }
    });
});
//update
$(document).on('click', '#update-student', function(e){
    e.preventDefault();
    var name = $('#names').val();
    var id = $('#id').val();
    if($("input[type='radio'].genders").is(':checked')){
        var gender = $("input[type='radio'].gender:checked").val();
    }
    var faculty = $("#view-facultys").find(":selected").val();
    var phone = $('#phones').val();
    var email = $('#emails').val();
    var addres = $('#address').val();
    $.ajax({
        type: "POST",
        url: "server/member/update_member.php",
        data: {id : id ,name : name ,gender : gender , facultys_id : faculty , phone : phone , email : email , addres : addres},
        dataType: "html",
        success: function (data) {
            $('.modal').modal('hide');
            $('#notify').html(data);
            getStudents();
        }
    });
});
// search
$('#phone_search').keyup(function (e) { 
    e.preventDefault();
    var phone = $(this).val();
    $.ajax({
        type: "POST",
        url: "server/member/list_member.php",
        data: {phone : phone},
        dataType: "html",
        success: function (data) {
            $('#view_data').html(data);
        }
    });
});