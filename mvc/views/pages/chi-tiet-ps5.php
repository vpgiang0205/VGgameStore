<link rel="stylesheet" href="/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<style>
     .img-responsive{
        width: 50px; height: 50px;
    }
   .color{
       color: red;
   }
   .icon{
       margin-right:5px;
   }
   .text-1{
    font-weight: bold;
    color: black;
    font-size:22px;
}

</style>

<b>Trang chủ > Sản phẩm > Máy chơi game SONY PS5 > Chi tiết sản phẩm</b>

<div class="container mt-5">
    <!-- <form method="post" > -->
        <div class="row">
            <?php while($row =mysqli_fetch_assoc($data['layma'])):?>
            <div class="col-sm-6">
                <img src="http://localhost/live1/mvc/public/image/<?php echo $row['hinh_anh']?>" alt="Máy Sony Playstation 5 PS5 Hàng Nhập Khẩu có sẵn" style="width:100%">
            </div>
            <div class="col-sm-6">
                
                <p class="text-1"> <?php echo $row['ten_sp']?></p>
                <div class="row">
                <div class="col-sm-6"><p style="color:black; font-size:28px; font-weight:bold"> <?php echo $row['gia']?><sup>đ</sup></p></div>
                <div class="col-sm-6"><p style="border: 1px solid red; width:100px; text-align:center; color:red; font-size:15px"><?php if($row['soluong']<= 1){echo "HẾT HÀNG";}else{echo "CÒN HÀNG";}?></p></div>
                <div class="d-grid gap-2 col-6 ">
                <a href="http://localhost/live1/giohang/id/<?php echo $row['ma_sp']?>" style="color:black">
						<button type="submit" class="btn btn-danger" name="muahang"<?php if($row['soluong']<= 1){echo 'disabled';}?>>Mua hàng</button>
						</a>
                   
                </div>
                
            </div>
                <div class="row">
                    <p class="text-1">MÔ TẢ SẢN PHẨM</p>
                    <p><b>Bộ sản phẩm bao gồm</b>: </p>
                    <p>01 máy chơi game PS5</p>
                    <p><b>Thương hiệu</b>: <?php echo $row['nha_cung_cap']?></p>
                    <p><b>Tình trạng</b>: Mới 100% - bao gồm :</p>
                    <p><b>01 tay cầm DualSense không dây</b></p>
                    <p><b>01 chân đế</b></p>   
                    <p><b>01 HDMI</b></p>   
                    <p><b>01 cáp usb sạc tay</b></p>    
                    <p><b>01 dây nguồn</b></p>   
                    <p>Máy ps5 hàng xách tay bảo hành 03 tháng cho máy và tay cầm tại TTBH Phòng kỹ thuật VĨ GIANG PS Phiên bản có Ổ Đĩa có thể chạy đia & digital </p>
                    <p>PlayStation 5 mang cấu hình mạnh mẽ, ngang một chiếc PC khủng, mang đến cho người dùng trải nghiệm toàn diện. </p>
                    <p>Trong đó, PS5 sẽ được trang bị CPU 8 nhân trên kiến trúc Zen 2 của AMD, xung nhịp dao động trong khoảng 3.5 Ghz. Về xử lý đồ họa, PS5 sẽ sử dụng GPU tùy biến dựa theo kiến trúc RDNA 2 của AMD. 
                    Với xung nhịp 2,23Ghz, hiệu suất PS5 đạt 10,28 teraflops cùng 36 đơn vị tính toán (Compute units). 
                    PS5 hoàn toàn có thể cân được các tựa game có đồ họa khủng ở độ phân giải 4k.</p>
                    <p>PS5 cũng hỗ trợ công nghệ Ray-traycing, tương tự như dòng card RTX mới nhất của NVIDIA trên PC. </p>
                    <p>PS5 cũng được nâng cấp đáng kể về dung lượng và tốc độ RAM so với thế hệ PS4 tiền nhiệm. Được trang bị RAM 16GB GDDR5, ổ SSD tùy chỉnh có dung lượng cực lớn lên tới 825GB, PS5 hứa hẹn đem đến cho người dùng trải nghiệm load game cực nhanh.</p>
                    <p><b>Xuất xứ</b>: Việt Nam</p>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    <!-- </form> -->
</div>

