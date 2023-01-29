<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style type="text/css">
	* {

		margin: 0;
		padding: 0;
	}

	.container {
		max-width: 1140px;
		margin-left: auto;
		margin-right: auto;

	}

	.row {
		display: flex;
		max-width: 100%;
		flex-wrap: wrap;
		margin-left: -15px;
		margin-right: -15px;
	}

	header {
		background-color: #0066FF;
		padding: 10px 0 10px 0;
	}

	a:hover {
		color: black;

	}

	a {
		text-decoration: none;
		color: white;
		font-size: 20px;

	}

	.col-2 {
		flex: 0 0 16.666667%;
		max-width: 16.666667%;
	}

	.col-8 {
		flex: 0 0 66.666667%;
		max-width: 66.666667%;
	}

	.menu ul li {

		float: left;
		margin-left: 20px;
		list-style: none;
	}

	.menu {
		width: 100%;
		display: block;
		justify-content: flex-end;
		align-items: center;
		text-align: center;

	}

	ul.menu_child {
		position: absolute;
		width: 225px;
		background-color: #777777;
		z-index: 9999;
		white-space: nowrap;

	}

	ul.menu_child li {
		padding: 15px 0 0 0;
		float: none;
		display: none;

	}

	.menu ul li:hover ul.menu_child li {
		display: block;
	}
</style>
<header class="menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 menu">
				<img src="http://localhost/live1/mvc/uploads/logovg.jpg" width="270px" height="170px">
			</div>
			<div class="col-10 menu">
				<form method="POST">
					<ul>
						<li><a href="http://localhost/live1/Homeus">Trang chủ</a></li>
						<li><a href="http://localhost/live1/tatcasanpham">Sản phẩm</a>
							<ul class="menu_child" style="background-color: #00CCFF; text-align: left; width: 300px;">
								<li><a href="http://localhost/live1/sonyps5"> Máy SONY PS5</a></li>
								<li><a href="http://localhost/live1/sonyps4pro">Máy SONY PS4 Pro</a></li>
								<li><a href="http://localhost/live1/game">Game</a></li>

								<li><a href="http://localhost/live1/taycamchoigame">Tay Cầm Chơi Game</a></li>
							</ul>
						<li><a href="http://localhost/live1/khuyenmai">Khuyến mãi</a></li>
						<li><a href="http://localhost/live1/huongdanmuahang">Hướng dẫn mua hàng</a></li>
						<li><a href="http://localhost/live1/gioithieu">Giới thiệu</a></li>
						<li><a href="http://localhost/live1/lienhe">Liên hệ</a></li>

						<li><a><input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="tukhoa"></a></li>
						<li><a><button class="btn btn-dark" type="submit" name="tim">Tìm kiếm</button></a></li>

					</ul>
				</form>
			</div>

		</div>
		<div class="trang" style="margin-left: 1273px">
			<a href="http://localhost/live1/thanhtoan"><button class="btn btn-success btn-sm" type="submit">Thanh toán</button></a>
			<a href="http://localhost/live1/giohang"><button class="btn btn-danger btn-sm" type="submit">Giỏ hàng</button></a>

		</div>
	</div>
	</div>
</header>