<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
td {  
vertical-align: middle;
}
@media screen and (max-width: 600px) { 
table#cart tbody td .form-control { 
width:20%; 
display: inline !important;
} 
 
.actions .btn { 
width:36%; 
margin:1.5em 0;
} 
 
.actions .btn-info { 
float:left;
} 
 
.actions .btn-danger { 
float:right;
} 
 
table#cart thead {
display: none;
} 
 
table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
} 
 
table#cart tbody tr td:first-child {
background: #333;
color: #fff;
} 
 
table#cart tbody td:before { 
content: attr(data-th);
font-weight: bold; 
display: inline-block;
width: 8rem;
} 
 
table#cart tfoot td {
display:block;
} 
table#cart tfoot td .btn {
display:block;
}
}</style>
<b>Trang chủ > Giỏ hàng</b><br>
<h2 class="text-center"><b>GIỎ HÀNG</b></h2>

<div class="container"> 
    
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
        <th style="width:50%">Tên sản phẩm</th> 
        <th style="width:10%">Giá</th> 
        <th style="width:8%">Số lượng</th> 
        <th style="width:22%" class="text-center">Thành tiền</th> 
        <th style="width:10%"></th> 
   </tr> 
  </thead> 
    <?php 
        
        $thanhtien=0;
        $tongtien=0;
        $i=0;
        if(!empty($_SESSION['giohang'])){ 
            foreach($_SESSION['giohang'] as $item){
                $thanhtien=$item['soluong']*$item['gia'];
                $tongtien += $thanhtien;
                $i++;
    ?>
        <tbody>
        
        <form method="post" enctype="multipart/form">

            <tr> 
                <td data-th="Product"> 
                        <div class="row"> 
                            
                            <div class="col-sm-2 hidden-xs"><img src="http://localhost/live1/mvc/public/image/<?php echo $item['hinh_anh']?>" width="60" height="60">
                            </div> 
                            
                            <div class="col-sm-10"> 
                            <p>Mô tả của sản phẩm <?php echo $i?></p> 
                                <h4 class="nomargin" style ="font-size:15px;">Sản phẩm <?php echo $i?>: <?php echo $item['ten_sp']?></h4> 
                               
                            </div> 
                        </div> 
                </td> 
                <td data-th="Price"><?php echo number_format($item['gia'], 0, ',', '.') . 'vnđ' ?></td> 
                <td data-th="Quantity"><input class="form-control text-center" name="Quantity" value="<?php echo $item['soluong']?>" type="number"></td> 
                <td data-th="Subtotal" class="text-center"><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td> 
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm" type="submit" name="tang" value="<?php echo $item['masp']?>">+<i class="fa fa-edit"></i></button>
                    <button class="btn btn-info btn-sm" type="submit" name="giam"<?php if($item['soluong']==1){echo'disabled';}?> value="<?php echo $item['masp']?>">-<i class="fa fa-edit"></i></button>
                    <button class="btn btn-info btn-sm" type="submit" name="xoa" value="<?php echo $item['masp']?>">Xóa<i class="fa fa-edit"></i></button>  
                </td> 
            </tr> 
            </form>    
        </tbody> 
            <?php
                }
            
            ?> 
        <tfoot> 
            <form method="post">
            <tr> 
                <td><a href="http://localhost/live1/tatcasanpham" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td> 
                <td><button class="btn btn-info btn-sm" type="submit" name="xoatc" >Xóa tất cả sản phẩm<i class="fa fa-edit"></i></button></td>
                <td colspan="2" class="hidden-xs"> </td> 
                <td class="hidden-xs text-center"><strong>Tổng tiền <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></strong></td> 
                <td><button class="btn btn-danger btn-block" name="btn_thanhtoan" type="submit">Thanh toán <i class="fa fa-angle-right"></i></button></td> 
            </tr> 
            </form>
        </tfoot>
    <?php
            
        }
    ?> 

 </table>

</div>