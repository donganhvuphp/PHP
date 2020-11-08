<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MVC - PDO - AJAX</title>
		<link rel="stylesheet" href="js/bootstrap.min.css" >
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<?php 
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				}else{
					$page = 'member';
				}

				switch ($page) {
					case 'member':
						include_once 'views/member/member.php';
						break;
					
					default:
						# code...
						break;
				}
			?>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myJava.js?<?php echo fileatime('js/myJava.js'); ?>"></script>
	

</body>
</html>