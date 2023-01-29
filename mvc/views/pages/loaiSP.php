<style>
    body{
        background-image: url('http://localhost/live1/mvc/public/image/ps5loai.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
.form{
    padding-left: 10px;
    background-color: white;
}
</style>

<div id="donhang"style="float: right;text-align: center; width: 700px; height: 600px">
    <div style="float: left;width: 40%; height: 100%;">
    <br>
        <h2 style="color: black; padding-top: 10px">Thêm Loại Sản Phẩm</h2>
        <br>
        <form method="POST" class="flat-table flat-table-1">
            <input style="float: left; border-radius: 5px; width: 90%;  font-size: 18px" type="text" id="ThemLoai" name="ThemLoai" placeholder="nhập tên loại sản phẩm">
           
            <input type="submit" name="btn-themloai" value="Thêm" style="float: left;background-color: #1E90FF; color: white; font-size: 18px; border-radius: 5px; border: none">
        </form>
    </div>
    <div id="DS_loai" style="float: left;width: 60%; height: 100%;">
    <br>
        <h2 style="color: black; padding-top: 10px">Danh Sách Loại Sản Phẩm</h2>
        <br>
        <form method="post">
        <table class="flat-table flat-table-1">
            <tr>
                <td>STT</td>
                <td>Mã Loại</td>
                <td>Tên Loại</td>
                <td>Quản Lí</td>

            </tr>
            <?php
            $i=1;
            while($dataloai = mysqli_fetch_assoc($data['data'])):
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $dataloai['ma_loai']; ?></td>
                <td><?php echo $dataloai['ten_loai']; ?></td>
                <td><button class="button" type="submit" name="xoaloai" value="<?php echo $dataloai['ma_loai']?>">Xóa</button></td>
            </tr>
            <?php endwhile; ?>
        </table>
        </form>
    </div>
<div>
