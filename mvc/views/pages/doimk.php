<?php 
        if (isset($_POST["quayve"])){
            session_destroy();
            header("Location:http://localhost/live1/");
        }
    ?> 
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
	<title>Trang Đổi mật khẩu</title>
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
								<h4 class="text-light mb-2">Trang đổi mật khẩu</h4>
								<p class="lead text-light">Điền mật khẩu mới</p>
							
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
							<h2>RESET MẬT KHẨU</h2>
							<form autocomplete="off" method="post">
							<div class="form-group">
									<label class="d-block" for="user">
										Tên Đăng Nhập:
									</label>
									<input type="text" name="user" class="form-control" id="user" tabindex="2" value="<?php echo $_SESSION['Ten']; ?>" readonly>
								</div>
								<div class="form-group">
									<label class="d-block" for="password" >
										Mật Khẩu:
									</label>
									<input type="password" name="pass" class="form-control" id="pass" tabindex="2" >
								</div>
                                <div class="form-group">
									<label class="d-block" for="password" >
										Xác Nhận Mật Khẩu:
									</label>
									<input type="password" name="pass2" class="form-control" id="pass2" tabindex="2" >
								</div>
								<!-- <div class="">
								</div> -->
                                <div class ="row">
                                    <div class="col-sm-9">
                                    <button type="submit" name = "quayve" class="btn btn-primary" tabindex="3">
										Quay lại trang đăng nhập
									</button>
                                    </div>
                                    <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary" name="doi" tabindex="3">
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