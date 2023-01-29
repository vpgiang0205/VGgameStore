<!DOCTYPE html>
<html>
<head>
	<!-- Karakter encoding -->
	<meta charset="utf-8">
	<!-- 
		Perintah agar lebar viewport mengikuti lebar perangkat
		dan skala mengikuti ukuran ketika web di-load
	 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Page</title>
	<!-- Load bootstrap stylesheet -->
	<link rel="stylesheet" href="http://localhost/live1/mvc/public/bootstrap/css/bootstrap.min.css">
	<!-- Load login stylesheet -->
	<link rel="stylesheet" href="http://localhost/live1/mvc/public/css/login.css">
</head>
<body>
	
	<div class="container-fluid">
		<div class="card card-login">
			<div class="card-body">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-12">
						<div class="padding bg-primary text-center align-items-center d-flex">
							<div id="particles-js"></div>
							<div class="w-100">
								<div class="logo">
								<img src="http://localhost/live1/mvc/public/image/logo.jpg" style = "width:50px ;margin-top:10px" class="img-fluid">
								</div>
								<h4 class="text-light mb-2">Kiểm tra thông tin</h4>
								<p class="lead text-light">Nhập tên đăng nhập và email.</p>
							
							</div>

							<div class="help-links">
								<ul>
									<li><a href="#">Điều khoản dịch vụ</a></li>
									<li><a href="#">Chính sách bảo mật </a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="padding">
							<h2>QUÊN MẬT KHẨU</h2>
							<form autocomplete="off" method="post">
								<div class="form-group">
									<label for="username">Tên đăng nhập:</label>
									<input type="text" name="user" class="form-control" id="username" tabindex="1" required>
								</div>
								<div class="form-group">
									<label class="d-block" for="email">
										Email:
									</label>
									<input type="text" name="email" class="form-control" id="email" tabindex="2" required>
								</div>
								<!-- <div class="">
								</div> -->
                                <div class ="row">
                                    <div class="col-sm-9">
                                    <a href="http://localhost/live1/admdangnhap"><button type="button" class="btn btn-primary" tabindex="3">
										Quay lại trang đăng nhập
									</button></a>
                                    </div>
                                    <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary" name="check" tabindex="3">
										Xác nhận
									</button>
                                    </div>
                                </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>