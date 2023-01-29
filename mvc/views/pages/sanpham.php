<style>
        body{
        background-image: url('http://localhost/live1/mvc/public/image/vs.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .formsua{
        margin-right: 100px;
        background-color: white;
        
    }
</style>
<body>
    
<div id="sanpham"style="text-align: center; width: 1200px; height: 1000px">
    <div id="SP" style="float: left; width: 35%; height: 100%; ">
    <?php
    if(isset($_POST['btn_themsp'])):
    ?>
    <h2 style="color: black; padding-top: 20px; padding-bottom: 20px; padding-right: 120px;">Thêm Sản Phẩm</h2>
        <form method="post" enctype="multipart/form-data" class = "formsua">
            <br>
           <label for="TenSP" style="float:left; padding-left: 25px">Tên Sản Phẩm</label>
            <input type="text" id="TenSP" name="TenSP" placeholder="Nhập Tên Sản Phẩm">
            <label for="GiaSP" style="float:left; padding-left: 25px">Giá Sản Phẩm</label>
            <input type="text" id="GiaSP" name="GiaSP" placeholder="Nhập Giá Sản Phẩm">
            <label for="hinh" style="float:left; padding-left: 25px">Hình Sản Phẩm</label>
            <input type="file" id="hinh" name="hinh" style="color: black">
            <label for="SL" style="float:left; padding-left: 25px; padding-top: 15px">Số Lượng Sản Phẩm</label>
            <input type="number" id="SL" name="SoLuong" placeholder="Nhập số lượng Sản Phẩm">
            <label for="LoaiSP" style="float:left; padding-left: 25px; padding-top: 15px">Loại Sản Phẩm</label>
            <select id="LoaiSP" name="LoaiSP">
            <?php while($showloai =mysqli_fetch_assoc($data['showloai'])):?>
                <option value="<?php echo $showloai['ten_loai']?>"><?php echo $showloai['ten_loai']?></option>
                <!-- <option value="LG">LG</option>
                <option value="AE Game">AE Game</option> -->
                <?php endwhile;?>
             
            </select>
            <label for="NCC" style="float:left; padding-left: 25px; padding-top: 15px">Nhà Cung Cấp</label>
            <input type="text" name="NCC" placeholder="Nhập nhà cung cấp">
            <input type="submit" name="ThemSP" value="Thêm Sản Phẩm">
        
            </form>
            <?php endif;?>
            
    <?php
    if(isset($_POST['sua'])):
    ?>
    <h2 style=" color: black; padding-top: 20px; padding-bottom: 20px; padding-right: 130px">Form Sửa</h2>
        <form method="post" class = "formsua" enctype="multipart/form-data">
            <?php
            while($getsp = mysqli_fetch_assoc($data['getttsp'])):
            ?>
            <br>
           <label for="TenSP" style="float:left; padding-left: 25px">Tên Sản Phẩm</label>
            <input type="text" id="TenSP" name="TenSP" placeholder="Nhập Tên Sản Phẩm" value="<?php echo $getsp['ten_sp']?>" required>
            <label for="GiaSP" style="float:left; padding-left: 25px">Giá Sản Phẩm</label>
            <input type="text" id="GiaSP" name="GiaSP" placeholder="Nhập Giá Sản Phẩm" value="<?php echo $getsp['gia']?>"required>
            <label style="float:left; padding-left: 25px">Hình Sản Phẩm</label>
            <input type="file" name="hinh2" style="color: black" value="<?php echo $getsp['hinh_anh']?>"required>
            <label for="SL" style="float:left; padding-left: 25px; padding-top: 15px">Số Lượng Sản Phẩm</label>
            <input type="number" id="SL" name="SoLuong" placeholder="Nhập số lượng Sản Phẩm" value="<?php echo $getsp['soluong']?>"required>
            <label for="LoaiSP" style="float:left; padding-left: 25px; padding-top: 15px">Loại Sản Phẩm</label>
            <select id="LoaiSP" name="LoaiSP" required>
            <?php while($showloai =mysqli_fetch_assoc($data['showloai'])):?>
                <option value="<?php echo $showloai['ten_loai']?>"><?php echo $showloai['ten_loai']?></option>
            <?php endwhile;?>
            
            </select>
            <label for="NCC" style="float:left; padding-left: 25px; padding-top: 15px">Nhà Cung Cấp</label>
            <input type="text" name="NCC" value = "<?php echo $getsp['nha_cung_cap'] ?>">
           
            <button type="submit" name="suasp" class = "button2" value="<?php echo $getsp['ma_sp']?>">Sửa</button>
            <?php endwhile;?>
            </form>
    <?php endif;?>
    </div>

    <div id ="TB_SP" style="width: 65%;height: 100%; float: left">
        <h2 style="color: white; padding-top: 20px; padding-bottom: 20px">Danh Sách Sản Phẩm</h2>
        <form method = "POST" >
            <input type="submit" name="btn_themsp" value="Thêm Sản Phẩm" style="width: 100%; margin-left: 10px "></input>
            <input type="search" name="tukhoa" style="width: 190px;  height: 40px " placeholder="Nhập Mã Sẩn Phẩm Để Tìm">
            <input type="submit" name="Tim" value="Tìm Kiếm" style="width: 15%; margin-left: 10px " >
        </form>
        <form method = "POST">
        <table class="flat-table flat-table-1">
            <thead>
            <th>Mã SP</th>
            <th>Tên SP</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>Loại</th>
            <th>Nhà cung cấp</th>
            <th>Chức Năng</th>
            </thead>
            <tbody>
            <?php
             while ($show = mysqli_fetch_assoc($data['showsp'])):

          ?>
            <tr>
                <td><?php echo $show['ma_sp']?></td>
                <td><?php echo $show['ten_sp']?></td>
                <td><?php echo $show['soluong']?></td>
                <td><?php echo $show['gia']?></td>
                <td ><img style="width: 80px" src="http://localhost/live1/mvc/public/image/<?php echo $show['hinh_anh']?>"></td>
                <td><?php echo $show['ten_loai']?></td>
                <td><?php echo $show['nha_cung_cap']?></td>
                <td><button type="submit" class = "button2" name="sua" value="<?php echo $show['ma_sp']?>">sửa</button> <button type="submit" class = "button" name="xoa" value="<?php echo $show['ma_sp']?>">Xóa</button></td>               
            </tr>
          <?php
          endwhile;
          ?>
            </tbody>
        </table>
        </form>
        
    </div>
</div>
</body>