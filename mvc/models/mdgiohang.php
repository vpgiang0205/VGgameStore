<?php
    class mdgiohang extends db{
        public function layid($ma_sp){
            
            
           if(!empty($_SESSION['giohang'][$ma_sp])){ 

                $_SESSION['giohang'][$ma_sp]['soluong']++;
                header('location:http://localhost/live1/giohang');
           }
           else
           {
                $sql="select * from sanpham where ma_sp = '$ma_sp'";
                $query = mysqli_query($this->con,$sql);
                if(mysqli_num_rows($query) != 0){
                    $row1=mysqli_fetch_array($query);
                    $_SESSION['giohang'][$ma_sp]= array(
                        "masp"=>$row1['ma_sp'],
                        "gia" =>$row1['gia'],
                        "ten_sp" =>$row1['ten_sp'],
                        "hinh_anh" =>$row1['hinh_anh'],
                        "soluong"=>1
                    );

                }
                header('location:http://localhost/live1/giohang');
            }
        //    unset($_SESSION['giohang']);
            
        }
        public function tangsl(){
            if(isset($_POST['tang'])){
                $tang = $_POST['tang'];
                foreach($_SESSION['giohang'] as $item){
                    if($item['masp']== $tang){
                        $_SESSION['giohang'][$tang]['soluong']++;
                        break;
                    }
                
                }
    
            }
        }

        public function giamsl(){
            if(isset($_POST['giam'])){
                $giam = $_POST['giam'];
                foreach($_SESSION['giohang'] as $item){
    
                    if($item['masp']== $giam){
                        if($_SESSION['giohang'][$giam]['soluong']== 0){

                            unset($_SESSION['giohang'][$giam]);
                            header('location:http://localhost/live1/giohang');
                        }
                        $_SESSION['giohang'][$giam]['soluong']-=1;
                       
                        break;
                    }
                   
                
                }

            }





        }
        public function xoa(){
            if(isset($_POST['xoa'])){
                $xoa = $_POST['xoa'];
                unset($_SESSION['giohang'][$xoa]);
            }

        }
        

        public function xoatc(){
            if(isset($_POST['xoatc'])){
                unset($_SESSION['giohang']);
            }
        }
       

        public function ktsoluong(){
            if(isset($_POST['btn_thanhtoan'])){
                foreach($_SESSION['giohang'] as $gh){
                    $ma_sp=$gh['masp'];
                    $soluongsp=$gh['soluong'];
                    $sql="SELECT * FROM `sanpham` WHERE `ma_sp`='$ma_sp'";
                    $query= mysqli_query($this->con,$sql);
                    $row=mysqli_fetch_assoc($query);
                    $soluong=$row['soluong'];
                    if($soluong<$soluongsp){
                        echo "<script> alert('Shop ko đủ số lượng để cung cấp ! ')</script> ";
                    }else{
                        header('location:http://localhost/live1/thanhtoan');
                    }
    
    
    
                }
            }
        }


    }
?>