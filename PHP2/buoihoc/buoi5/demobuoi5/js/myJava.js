getAll();

function getAll(){
	$.get('server/member/list_member.php', function(data){
		$("#view_data").html(data);
	});
}

function getFaculty(){
	$.get('server/member/facultys.php', function(data){
		$("#view_faculty").html(data);
	});
}
getFaculty();

//$(".delete-student").click(function(){
$(document).on('click', '.delete-student', function(){
	var id = $(this).val();
	var check = confirm('Bạn có muốn xóa học viên này không? ');

	if (check) {
		$.ajax({
			url 	 : 'server/member/delete-student.php',
			type 	 : 'POST',
			dataType : 'html',
			data 	 : { id : id },

			success : function(data){
				$("#noti").html(data);
				getAll();
			}

		});
	}
});


$(document).on('click', '#add_member', function(e){
	e.preventDefault();
	var name 	= $("#name").val();
	var phone 	= $("#phone").val();
	var email 	= $("#email").val();
	var addres 	= $("#addres").val();
	var faculty = $("#view_faculty").val();
	var gender 	= 1;
	
	console.log(name + " " + phone + " " + email + " " + addres + " " + faculty + " " + gender);

	$.ajax({
		url 	 : 'server/member/add-student.php',
		type 	 : 'POST',
		dataType : 'html',
		data 	 : { name : name, phone : phone, email : email, addres : addres, faculty : faculty, gender : gender },

		success : function(data){
			$("#noti").html(data);
			$('#frm_add_member')[0].reset();
			getAll();
		}

	});

});