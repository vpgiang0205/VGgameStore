<?php
?>
<link rel="stylesheet" href="./css/fontawesome-free-5.15.4-web/css/all.min.css">
<div id="thongbao"style="float: right;  background-color: white;text-align: center; width: 1300px; height: 1500px">
    <form method="post">
        <div id="tongsanpham" style="float: left; border-style: groove; background-color: white; height: 12%; width: 20%; margin-top: 20px; margin-left: 47px">
            <p style="color: black; padding-top: 10px;">Tổng Số Sản Phẩm</p>
            <a href="/live/sanpham"><i class="fas fa-gamepad" style="font-size: 50px; color: #1E90FF"></i></a>
            <?php
                while ($show = mysqli_fetch_assoc($data['sp'])) :
            
        
            ?>
            <P style="color: #1E90FF; padding-top: 10px; font-size: 50px;font-family:fantasy"><?php echo $show['tong_sp'] ?></P>
            <?php
                endwhile;
            ?>
        </div>
        <div id="tongdonhang" style="float: left; border-style: groove; background-color: white; height: 12%; width: 20%; margin-top: 20px; margin-left: 47px">
           
            <p style="color: black; padding-top: 10px;">Tổng Số Đơn Hàng</p>
            <a href="/live/donhang"> <i class="far fa-clone"style="font-size: 50px; color: #1E90FF; margin-top: 5px;"></i></a>
            <?php
                while ($show = mysqli_fetch_assoc($data['dh'])) :
            ?>
            <P style="color: #1E90FF; padding-top: 10px; font-size: 50px;font-family:fantasy"><?php echo $show['tong_don']?></P>
            <?php
                endwhile;
            ?>
        </div>
        <div id="tongkhach" style="float: left; border-style: groove; background-color: white; height: 12%; width: 20%; margin-top: 20px; margin-left: 47px">
            <p style="color: black; padding-top: 10px;">Tổng Số Khách Hàng</p>
            <a href=""> <i class="far fa-user"style="font-size: 50px; color: #1E90FF; margin-top: 5px;"></i></a>
            <?php
                while ($show = mysqli_fetch_assoc($data['kh'])) :
            ?>
            <P style="color: #1E90FF; padding-top: 10px; font-size: 50px;font-family:fantasy"><?php echo $show['tong_kh']?></P>
            <?php
                endwhile;
            ?>
        </div>
        <div id="Tongtien" style="float: left; border-style: groove; background-color: white; height: 12%; width: 20%; margin-top: 20px; margin-left: 47px">
            <p style="color: black; padding-top: 10px;">Tổng Tiền</p>
            <a href=""><i class="fas fa-money-bill-wave-alt" style="font-size: 50px; color: #1E90FF; margin-top: 5px;"></i></a>
            <?php
                while ($show = mysqli_fetch_assoc($data['gia'])) :
            ?>
            <P style="color: #1E90FF; padding-top: 10px; font-size: 35px;font-family:fantasy"><?php echo $show['tong gia']?>.vnd</P>
            <?php
                endwhile;
            ?>
        </div>
    </form>
</div>