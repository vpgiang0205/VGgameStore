<?php
?>
<style>
    body{
        background-image: url('http://localhost/live1/mvc/public/image/white-xbox-one-x-2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    
    }
</style>


<body>
<div id="khachhang"style="float: right;text-align: center; width: 1300px; height: 900px">
<?php
    if(isset($_POST['xem'])):
    ?>
    <div id = "chitiet" style="color: white; padding-top: 10px">
    <br>
    <h2 >Lịch Sử Giao Dịch</h2>
    <form method="post">
    <table style="width: 100%" class="flat-table flat-table-1">  
            <tr>
                <td>Mã Đơn Hàng</td>
                <td>Họ Tên</td>
                <td>Số Điện Thoại</td>
                <td>Địa Chỉ</td>
                <td>Nơi Giao</td>
                <td>Email</td>
                <td>Ngày tạo</td>
                <td>Tên Đăng Nhập</td>
                <td>Mật Khẩu</td>
               
            </tr>
            <?php
            $STT=1;
            while ($rowKH = mysqli_fetch_assoc($data['GetKHID'])) : ?>
            <tr>
            
                <td name = "madh"><?php echo $rowKH['ma_dh'] ?></td>         
                <td name = "tenkh"><?php echo $rowKH['ho_kh'] ?> <?php echo $rowKH['ten_kh'] ?></td>                   
                <td name = "sdt"><?php echo $rowKH['sdt'] ?></td>
                <td name = "diachi"><?php echo $rowKH['dia_chi'] ?></td>
                <td name = "noigiao"><?php echo $rowKH['noi_giao'] ?></td>
                <td name = "email"><?php echo $rowKH['email'] ?></td>
                <td name = "email"><?php echo $rowKH['ghichu'] ?></td>
                <td name = "tendn"><?php echo $rowKH['ten_dn'] ?></td>
                <td name = "matkhau"><?php echo $rowKH['mat_khau'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </form>
      
    </div>
    <?php endif;?>
    <?php if(isset($_POST['them'])) :?>
        <br>
    <div id = "formthem" style="color: white; padding-top: 10px">
        <br>   
        <h2 >Lịch Sử Giao Dịch</h2>
        <br>
        <form method="post">
            <table style="width: 100%" class="flat-table flat-table-1">
            
                <tr>
                    <td>Họ</td>
                    <td>Tên</td>
                    <td>Số Điện Thoại</td>
                    <td>Địa Chỉ</td>
                    <td>Email</td> 
                    <td>Tên Đăng Nhập</td>            
                    <td>Mật Khẩu</td>  
                    <td>Thao tác</td>
                </tr>
                <tr>
                <td><input type="text"name = "hokh" required></td>
                <td><input type="text"name = "tenkh" required></td>
                <td><input type="text"name = "sdt" required></td>
                <td><input type="text"name = "diachi" ></td>
                <td><input type="text"name = "email" required></td>
                <td><input type="text"name = "tendn" required></td>
                <td><input type="text"name = "matkhau" required></td>
                <td><button class="button1" type="submit" name="themkh">Thêm</button>
                <button class ="button" type="reset" value="Reset">Clear</button></td>
                </tr>               
            </table>          
        </form>     
    </div>
    <?php endif;?>
    

    <?php if(isset($_POST['sua'])) : ?>
        <br>
    <div id = "formsua" style="color: white; padding-top: 10px">
        <h2 >Sửa Khách Hàng</h2>
        <form method="post">
            <table style="width: 100%" class="flat-table flat-table-1">
          
                <tr>
                    <td>Mã Khách Hàng</td>
                    <td>Họ</td>
                    <td>Tên</td>
                    <td>Số Điện Thoại</td>
                    <td>Địa Chỉ</td>
                    <td>Email</td> 
                    <td>Tên Đăng Nhập</td>            
                    <td>Mật Khẩu</td>  
                    <td>Thao tác</td>
                </tr>
                <tr>
                <?php while ($rowttKH = mysqli_fetch_assoc($data['GetKHID'])) : ?>
                <td><input type="text"name = "makh" readonly value="<?php echo $rowttKH['ma_kh'] ?>"></td>   
                <td><input type="text"name = "hokh" value="<?php echo $rowttKH['ho_kh'] ?>"></td>   
                <td><input type="text"name = "tenkh"  value = "<?php echo $rowttKH['ten_kh'] ?>"></td>
                <td><input type="text"name = "sdt"  value = "<?php echo $rowttKH['sdt'] ?>"></td>
                <td><input type="text"name = "diachi"  value = "<?php echo $rowttKH['dia_chi'] ?>"></td>
                <td><input type="text"name = "email"  value = "<?php echo $rowttKH['email'] ?>"></td>
                <td><input type="text"name = "tendn" value = "<?php echo $rowttKH['ten_dn'] ?>" ></td>
                <td><input type="text"name = "matkhau"  value = "<?php echo $rowttKH['mat_khau'] ?>"></td>
                <td><button class ="button1" type="submit" name="suakh" value = "<?php echo $rowttKH['ma_kh'] ?>">Sửa</button>
                <button class = "button" type="reset" value="Reset">Clear</button></td>
                </tr>
            </table>
            <?php endwhile; ?>
        </form>     
    </div>
    <?php endif; ?>

<div id="dskhachhang" style=" width: 100%">
<br>
            <h2 style="color: white; padding-top: 10px">Danh Sách Khách Hàng</h2>
        
            <form method = "POST">
            <input type="submit" name="them" style="width: 15%; margin-left: 10px " value = "Thêm Khách Hàng">

                <input type="search" name="tukhoa" style="width: 190px;  height: 40px " placeholder="Nhập Tên Khách Hàng">
                <input type="submit" name="Tim" value="Tìm Kiếm" style="width: 15%; margin-left: 10px " > 
                </form>
            <form method="post">
            
            <table style="width: 100%" class="flat-table flat-table-1">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên Khách Hàng</td>
                        <td>Số Điện Thoại</td>
                        <td>Địa Chỉ</td>
                        <td>Email</td>
                        <td>Tên Đăng Nhập</td>
                        <td>Quản Lí</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $STT=1;
                    while ($rowKH = mysqli_fetch_assoc($data['GetKH'])) : ?>
                    <tr>
                    
                        <td><?php echo $STT++ ?></td>
                        <td name = "tenkh"><?php echo $rowKH['ho_kh'] ?> <?php echo $rowKH['ten_kh'] ?></td>                   
                        <td name = "sdt"><?php echo $rowKH['sdt'] ?></td>
                        <td name = "diachi"><?php echo $rowKH['dia_chi'] ?></td>
                        <td name = "email"><?php echo $rowKH['email'] ?></td>
                        <td name = "tendn"><?php echo $rowKH['ten_dn'] ?> </td>                   
                        <td><button class="button1" type="submit" name="xem" value="<?php echo $rowKH['ma_kh'] ?>">Xem</button>
                        

                        <button class = "button2" type = "submit" name ="sua" value="<?php echo $rowKH['ma_kh'] ?>">Sửa</button>
                
                        
                        <button class = "button" type = "submit" name ="xoa" value="<?php echo $rowKH['ma_kh'] ?>">Xóa</button>
                    
                        
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            </form>
            <br><br>
   

    
    </div>
</body>
    