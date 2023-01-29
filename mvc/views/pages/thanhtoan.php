<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="./public/js/jquery-2.js"></script>
<style type="text/css">
.text-1 {
    font-weight: bold;
    color: #0033FF;
    margin-top: 10px;
    font-size: 16px;
}

.text-5 {
    color: #0033FF;
    font-size: 18px;
    text-decoration: none;
    font-weight: bold;
}
</style>
<b>Trang chủ > Thanh toán</b><br>
<br>
<h2 class="text-center"><b>THANH TOÁN</b></h2>
<br>
<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-sm-5">
                <img src="./mvc/uploads/logovg.jpg" class="img-responsive-1" style="width:100px; height:100px">
                <div class="row">
                    <div class="col-sm-6 text-1" style="margin-right: 20px">THÔNG TIN NHẬN HÀNG</div>
                </div>
                <?php
                if(!empty($_SESSION['thongtin'])){
                    foreach($_SESSION['thongtin'] as $item):

            
            ?>
                <p><input class="form-control" type="text" name="email" placeholder="Email"
                        value="<?php echo $item['email'];?>" required> </p>
                <p><input class="form-control" type="text" name="ho" placeholder="Họ"
                        value="<?php echo $item['ho']; ?>" required></p>
                <p><input class="form-control" type="text" name="ten" placeholder="tên"
                        value="<?php echo $item['ten']; ?>" required></p>
                <p><input class="form-control" type="text" name="sdt" placeholder="Số điện thoại"
                        value="<?php echo $item['sdt']?>" required></p>
                <p><input class="form-control" type="text" name="diachi" placeholder="Địa chỉ"
                        value="<?php echo $item['dia_chi']?>" required></p>
                
                <textarea placeholder="Ghi chú" name="ghichu" class="form-control"></textarea>
                <?php
                    endforeach;
                }else{
            ?>

                <p><input class="form-control" type="text" name="email" placeholder="Email" value="" required> </p>
                <p><input class="form-control" type="text" name="ho" placeholder="Họ" value="" required></p>
                <p><input class="form-control" type="text" name="ten" placeholder="Tên" value="" required></p>
                <p><input class="form-control" type="text" name="sdt" placeholder="Số điện thoại" value="" required></p>
                <p><input class="form-control" type="text" name="diachi" placeholder="Địa chỉ" value="" required></p>
               
                <textarea placeholder="Ghi chú" name="ghichu" class="form-control"></textarea>

                <?php
                }
            ?>
            </div>

            <div class="col-sm-7">

                <div class="row">
                    <p class="text-1">ĐƠN HÀNG : sản phẩm </p>
                    <div class="container" style="overflow-y: auto">
                        <?php
                            $thanhtien=0;
                            $tongtien=0;
                        
                            $ship=30000;
                            if(!empty($_SESSION['giohang'])){
                                foreach($_SESSION['giohang'] as $item){
                                    $thanhtien=$item['soluong']*$item['gia'];
                                    $tongtien += $thanhtien ;
                                
                        ?>
                        <div class="row mt-5" style="height:100px">
                            <div class="col-sm-3">
                                <img class="card-img-top" src="http://localhost/live1/mvc/public/image/<?php echo $item['hinh_anh']?>"
                                    alt="" style="width:100%; height: 140px;">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['ten_sp']?>
                                    </h5>
                                    <p class="card-text text-5">Số lượng: <?php echo $item['soluong']?></p>
                                    <p class="card-text text-5">
                                        <?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></p>
                                </div>
                            </div>
                        </div>

                        <?php
                                }
                            }
                        ?>
                    </div>


                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <p>Tạm tính</p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <p>Phí vận chuyển</p>
                        </div>
                        <div class="col-sm-6">
                            <p>30.000<sup>đ</sup></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p>Tổng cộng</p>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo number_format($tongtien+$ship, 0, ',', '.') . 'vnđ' ?></sup></p>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="http://localhost/live1/giohang" class="text-5">Trở về giỏ hàng</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" name="btnDatHang" <?php if(empty($_SESSION['giohang'])){echo'disabled';}?> class="btn btn-danger" style="background:#red; border: 2px solid #red">ĐẶT
                            HÀNG</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </form>
</div>