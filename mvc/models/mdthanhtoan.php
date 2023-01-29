<?php
    class mdthanhtoan extends db{
        public function ThanhToan(){
           
         
            if(isset($_POST['btnDatHang'])){
                if(empty($_SESSION['thongtin'])){
                    $email=$_POST['email'];
                    $ho=$_POST['ho'];
                    $ten=$_POST['ten'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];
                    $gioi_tinh=0;
                    // them khach hang moi neu ko ton tai session thongtin
                    $sql="INSERT INTO `khach_hang`( `ho_kh`, `ten_kh`, `sdt`, `dia_chi`, `email`, `gioi_tinh`, `ten_dn`, `mat_khau`) 
                    VALUES ('$ho',' $ten','$sdt','$diachi',' $email','$gioi_tinh',0,0)";
                    $query=mysqli_query($this->con,$sql);
                    $id = $this->con->insert_id;
                    // them don hang vao csdl
                    // echo $id;
                    // $today = date("Y/m/d");
                    // echo $today;
                    $sql1="INSERT INTO `dondathang`( `ma_kh`,`noi_giao`, `hien_trang`) 
                    VALUES ('$id','$diachi','chưa giao')";
                    $query1=mysqli_query($this->con,$sql1);
                    $id2 = $this->con->insert_id;
                    foreach($_SESSION['giohang'] as $sp){
                        $masp=$sp['masp'];
                        $thanhtien= $sp['gia']* $sp['soluong'];
                        $soluong= $sp['soluong'];
                        $sql2="INSERT INTO `ct_dondathang`(`ma_dh`, `ma_sp`, `gia_ban`, `sl_dat`) VALUES ('$id2','$masp','$thanhtien','$soluong')";
                        $query2=mysqli_query($this->con,$sql2); 

                        $sqlUpdateSP = "UPDATE `sanpham` SET `soluong`=((select `soluong`FROM sanpham WHERE `ma_sp`='$masp')-(select sum(ct.sl_dat)FROM ct_dondathang ct, dondathang dh WHERE ct.ma_dh = dh.ma_dh AND ct.ma_sp='$masp' AND ct.ma_dh=' $id2' GROUP by dh.ma_dh)) 
                        WHERE ma_sp='$masp'";
                        $queryup=mysqli_query($this->con,$sqlUpdateSP);
                        unset($_SESSION['giohang']);
                        header('location:  http://localhost/live1/thanhtoan');
                    }
                }
                else
                {
                    foreach($_SESSION['thongtin'] as $tt){
                        $MaKH= $tt['ma_kh'];
                        $DC= $tt['dia_chi'];
                        $sql3="INSERT INTO `dondathang`( `ma_kh`,`noi_giao`, `hien_trang`) 
                        VALUES (' $MaKH','$DC','chưa giao')";
                        $query3=mysqli_query($this->con,$sql3);
                        $id3 = $this->con->insert_id;

                        foreach($_SESSION['giohang'] as $sp1){
                            $masp1=$sp1['masp'];
                            $thanhtien1= $sp1['gia']* $sp1['soluong'];
                            $soluong1= $sp1['soluong'];
                            $sql2="INSERT INTO `ct_dondathang`(`ma_dh`, `ma_sp`, `gia_ban`, `sl_dat`) VALUES ('$id3','$masp1','$thanhtien1','$soluong1')";
                            $query2=mysqli_query($this->con,$sql2); 

                            $sqlUpdateSP1 = "UPDATE `sanpham` SET `soluong`=((select `soluong`FROM sanpham WHERE `ma_sp`='$masp1')-(select sum(ct.sl_dat)FROM ct_dondathang ct, dondathang dh WHERE ct.ma_dh = dh.ma_dh AND ct.ma_sp='$masp1' AND ct.ma_dh=' $id3' GROUP by dh.ma_dh)) 
                            WHERE ma_sp='$masp1'";
                            $queryup1=mysqli_query($this->con,$sqlUpdateSP1);
                            unset($_SESSION['giohang']);
                            header('location:  http://localhost/live1/thanhtoan');
                        }
                      
                    }
                   
                }

                
               

            }
        }
    }
?>