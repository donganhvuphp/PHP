<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Học viên IT-Plus</title>
		<link rel="stylesheet" href="acsset/css/bootstrap.min.css" />
		<link rel="stylesheet" href="acsset/css/my_css.css">


	</head>
	<body>
		
		<div class="container">

			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Logo</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello: ABC</b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Thông tin</a></li>
									<li><a href="#">Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>

			<!-- Start Banner website -->
			<div class="row">
				<div class="col-md-12">
					<img src="http://itplus-academy.edu.vn/upload/e0299984838d38ecac3805d4d6661829/files/banner%20sao%20khue-03.jpg" alt="IT-Plus" class="responsive" style="width: 100%;" />
				</div>
			</div>
			<!-- End banner website -->

			<!-- Start main -->
			<div class="row main_member">
				<div class="col-md-12">
					<div class="col-md-3">
						<ul class="list-group">
						  <li class="list-group-item"><b>QUẢN TRỊ HỌC VIÊN</b></li>
						  <li class="list-group-item">
						  	<a href="index.php">Danh sách thành viên</a>
						  </li>
						  <li class="list-group-item">
						  	<a href="index.php?page=add_member">Thêm mới</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-9">
						<?php 
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							}else{
								$page = 'trang_chu';
							}

							switch ($page) {
								case 'add_member':
									include 'views/add_member.php';
									break;

								case 'edit':
									include 'views/edit_member.php';
									break;

									case 'trang_chu':
										// include 'views/list_member.php';
										include_once 'controller/student_c.php';
										$student = new Member_c();
										$student->student();
										break;
								
								default:
									echo "<h4 style='color: red;'>ERROR 404, trang không tồn tại <span><a href='index.php' style='color: blue;'>Quay lại</a></span></h4>";
									break;
							}
						?>
					</div>
				</div>
			</div>
			<!-- End main -->

			<!-- Start Footer -->
			<div class="row footer">
				<div class="col-md-12 text-center">
					Hệ thống học viên IT Plus <br>
					Copyright © 2011 All Rights Reserved. Phát triển bởi ITPlus Academy
				</div>
			</div>
			<!-- End Footer -->

		</div>

		<script src="acsset/js/jquery.js"></script>
		<script src="acsset/js/myJava.js"></script>
		<script src="acsset/js/bootstrap.min.js"></script>
	</body>
</html>