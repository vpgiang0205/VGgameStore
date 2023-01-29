<style>
body {
    background-image: url('http://localhost/live1/mvc/public/image/1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
}
#menu li {
  padding-top:3%;
  padding-left:3% ;
  display: inline-block;
}
table, th, td{
    border:1px solid black;
    color:black;
    border-collapse:collapse;
}

</style>
<body>
<div id="body" style="width: 1300px; height: 1200px;border:2px solid black;">

    <div id="ten"style="width: 100%; height:100px;">
        <h2 style="color:black; padding-top:23px ;">THỐNG KÊ</h2>
        <p><i class="fas fa-chart-line"style="color:black;"></i></p>
    </div>

    <div id="insite"style="width: 100%; height:93%;">
        <div id="doc"style="width: 100%; height:87%;">
            <div id="bang_chung" style="width: 100%; height:100%">
                <div id="bctrai" style="width: 30%; height:100%;float:left;">
                    <img src="http://localhost/live1/mvc/public/image/company.jpg" style="width: 300px;">
                    <br><br>
                    <h3 style="text-align:center; color:black;"> SHOP GAME </h3>
                    <br><br>
                    <P style="color:black; margin-right:150px">Email: Game@gmail.com</P>
                    <br>
                    <P style="color:black; margin-right:150px">Ngày thành lập:1/10/2021</P>
                    <br>
                    <P style="color:black; margin-right:150px">Trạng thái: hoạt động</P>
                </div>
                <div id="bcphai" style="width: 70%; height:100%; float:left;">
                    
                        <div id="thoigian" style="width: 100%; height:30%;border:2px solid black;">
                        
                        
                            <div id="trai" style="width: 30%; height:90%; float:left;">
                                <p style="color:black;">Thống Kê danh thu theo thời gian</p>
                                <br>
                                <form method="post">
                                    <label for="tungay" style="color:black;">Từ Ngày: </label>
                                    <input type="date" name="tungay" id="tungay" required>
                                    <br><br>
                                    <label for="denngay" style="color:black;">Đến Ngày: </label>
                                    <input type="date" name="denngay" id="denngay" required>
                                    <br><br>
                                    <button type="submit" name="TK_ngay" style="width: 70px; height: 25px;">Thống kê</button>
                                    <br><br>
                                    <button type="submit" name="lammoi" style="width: 70px; height: 25px;">refresh</button>
                                </form>
                            </div>
                            <div id="phai" style="width: 70%; height:90%;float:left;">
                                <div id="l" style="width: 50%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black; font-size:15px">Theo Thời Gian</p>
                                    <p><i class="fas fa-money-check-alt" style="color:black; font-size:50px"></i></p>
                                    <br>
                                    <?php
                                        while($row = mysqli_fetch_assoc($data['tienTN'])):
                                    ?>
                                    <p style="color:black; font-size:15px">Tổng tiền: <?php echo $row['tonggia']?>.VNĐ</p>
                                    <?php
                                        endwhile;
                                    ?>
                                </div>
                                <div id="r" style="width: 50%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black; font-size:15px">Tổng Tiền</p>
                                    <p><i class="fas fa-money-bill-wave" style="color:black; font-size:50px"></i></p>
                                    <br>
                                    <?php
                                        
                                        while($row = mysqli_fetch_assoc($data['gia'])):
                                    ?>
                                    <p style="color:black; font-size:15px">Tổng tiền: <?php echo $row['tong gia']?>.VNĐ</p>
                                    <?php
                                        endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="khachhang" style="width: 100%; height:32%;border:2px solid black;">
                            
                            <div id="trai1" style="width: 30%; height:90%; color: black; float:left;">
                                <p style="color:black;">Thống Kê danh thu theo khách hàng</p>
                                <br>
                                <form method="post">
                                    <label for="tungaykh" style="color:black;">Từ Ngày: </label>
                                    <input type="date" name="tungaykh" id="tungaykh" required>
                                    <br><br>
                                    <label for="denngaykh" style="color:black;">Đến Ngày: </label>
                                    <input type="date" name="denngaykh" id="denngaykh" required>
                                    <br><br>
                                    <button type="submit" name="TK_khach" style="width: 70px; height: 25px;">Thống kê</button>
                                    <br><br>
                                    <button type="submit" name="TK_khachno1" style="width: 70px; height: 25px;">refresh</button>
                                </form>
                            </div>
                            <div id="phai1" style="width: 70%; height:90%;float:left;">
                                <div id="d" style="width: 60%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black;">Bảng Khách hàng</p>
                                    <table style="width: 100%;height:auto;">
                                        <tr >
                                            <th>Tên KH</th>
                                            <th>SĐT</th>
                                            <th>Mã ĐH</th>
                                            <th>Tổng ĐH</th>
                                            <th>Ngày ĐH</th>
                                        </tr>
                                        <?php
                                            $tongtien=0;
                                            if(mysqli_num_rows($data['KHtheoTG'])>0):
                                                    
                                                while($row = mysqli_fetch_assoc($data['KHtheoTG'])):
                                                    $tien=$row['gia'];
                                                    $tongtien+=$tien;
                                        ?>      
                                                    <tr>
                                                        <td><?php echo $row['ten']?></td>
                                                        <td><?php echo $row['sdt']?></td>
                                                        <td><?php echo $row['madon']?></td>
                                                        <td><?php echo $row['gia']?></td>
                                                        <td><?php echo $row['ngaydat']?></td>
                                                    </tr>
                                        <?php 
                                                endwhile;
                                            endif;
                                            
                                        ?> 
                                        <tr>
                                            <th col="5">Tổng: </th>
                                            <th><?php echo $tongtien;?></th>
                                        </tr>
                                    </table>
                                </div>
                                <div id="c" style="width: 40%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black; font-size:15px">KH MUA NHIỀU NHẤT</p>
                                    <p><i class="fas fa-crown" style="color:black; font-size:50px"></i></p>
                                    <?php 
                                        while($row= mysqli_fetch_assoc($data['Khmuanhieu'])):
                                    ?>
                                    <p style="color:black; font-size:15px">Tên: <?php echo $row['ten']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">SĐT: <?php echo $row['sdt']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">email: <?php echo $row['email']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">Tổng ĐH: <?php echo $row['tongdon']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">Tổng Tiền: <?php echo $row['tonggia']?></p>
                                    <?php endwhile;?>
                                </div>
                            </div>
                        </div>
                        <div id="sanpham" style="width: 100%; height:30%;border:2px solid black;">
                            
                        <div id="trai2" style="width: 30%; height:90%; color: black;float:left;">
                                <p style="color:black;">Thống Kê danh thu theo sản phẩm</p>
                                <br>
                                <form method="post">
                                    <label for="tungaysp" style="color:black;">Từ Ngày: </label>
                                    <input type="date" name="tungaysp" id="tungaysp">
                                    <br><br>
                                    <label for="denngaysp" style="color:black;">Đến Ngày: </label>
                                    <input type="date" name="denngaysp" id="denngaysp">
                                    <br><br>
                                    <button type="submit" name="TK_SP" style="width: 70px; height: 25px;">Thống kê</button>
                                    <br><br>
                                    <button type="submit" name="TK_SPno1" style="width: 70px; height: 25px;">refresh</button>
                                </form>
                            </div>
                            <div id="phai2" style="width: 70%; height:90%;float:left;">
                                <div id="a" style="width: 60%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black;">Bảng sản phẩm</p>
                                    <table style="width: 100%;height:auto;">
                                        <tr >
                                            <th>Tên SP</th>
                                            <th>Mã SP</th>
                                            <th>Mã ĐH</th>
                                            <th>Ngày ĐH</th>
                                            <th>Tiền</th>
                                        </tr>
                                        <?php
                                            $tongtiensp=0;
                                            if(mysqli_num_rows($data['KHtheoTG'])>0):
                                                    
                                                while($row = mysqli_fetch_assoc($data['SPtheoTG'])):
                                                    $tien=$row['gia'];
                                                    $tongtiensp+=$tien;
                                        ?> 
                                        <tr>
                                        
                    
                                            <td><?php echo $row['tensp']?></td>
                                            <td><?php echo $row['masp']?></td>
                                            <td><?php echo $row['madon']?></td>
                                            <td><?php echo $row['ngaydat']?></td>
                                            <td><?php echo $row['gia']?></td>
                                       
                                        </tr>
                                        <?php 
                                                endwhile;
                                            endif;   
                                        ?> 
                                        <tr>
                                            <th col="5">Tổng: </th>
                                            <th><?php echo $tongtiensp;?></th>
                                        </tr>
                                    </table>
                                </div>
                                <div id="c" style="width: 40%; height:100%;float:left;">
                                    <br>
                                    <p style="color:black; font-size:15px">SP BÁN NHIỀU NHẤT</p>
                                    <?php
                                        while($row = mysqli_fetch_assoc($data['SPmuanhieu'])):
                                    ?>
                                    <p><i class="fas fa-crown" style="color:black; font-size:50px"></i></p>
                                    <p style="color:black; font-size:15px">Tên SP: <?php echo $row['tensp']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">Mã SP: <?php echo $row['masp']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">Tổng ĐH: <?php echo $row['tongdon']?></p>
                                    <br>
                                    <p style="color:black;font-size:15px">Tổng Tiền: <?php echo $row['tongtien']?></p>
                                    <?php
                                        endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    
                
                </div>
            </div>
        
        </div>
    
    </div>
</div>
</body>

