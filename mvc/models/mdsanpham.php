<?php
class mdsanpham extends db{
    
    public function showsp()
    {
        if(isset($_POST['Tim'])&& $_POST['tukhoa']!=""){
            $ma_sp = $_POST['tukhoa'];
            $sql = "SELECT * FROM sanpham where ma_sp='$ma_sp'";
            $query = mysqli_query($this->con,$sql);
            return $query; 
        }
        else{
           
            $sql = "SELECT * FROM sanpham";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }

    }

    public function themsp()
    {
        if(isset($_POST['ThemSP'])){
            $hinhanh = $_FILES['hinh']['name'];
            $HinhAnh_tmp = $_FILES['hinh']['tmp_name'];

            $ten_sp=$_POST['TenSP'];
            $trangthai=0;
            $SoLuong=$_POST['SoLuong'];
            $ten_loai=$_POST['LoaiSP'];
            $nha_cung_cap=$_POST['NCC'];
            $gia=$_POST['GiaSP'];
            $sql = "INSERT INTO sanpham (`ten_loai`, `ten_sp`, `gia`, `hinh_anh`, `soluong`, `trang_thai`, `nha_cung_cap`) values ('$ten_loai', '$ten_sp', '$gia', '$hinhanh', '$SoLuong','$trangthai','$nha_cung_cap')";      
            mysqli_query($this->con,$sql); 
            move_uploaded_file($HinhAnh_tmp,'./mvc/public/image/'.$hinhanh);
            header ('location:  http://localhost/live1/sanpham ');
        }
    }

    public function getttsp()
    {
        if(isset($_POST['sua'])){
            $sql = "SELECT * from sanpham where ma_sp = '$_POST[sua]'";
            return mysqli_query($this->con,$sql); 
             
        }
    }

    public function suasp()
    {
        if(isset($_POST['suasp'])){
            $hinhanh2 = $_FILES['hinh2']['name'];
            $HinhAnh_tmp2 = $_FILES['hinh2']['tmp_name'];

            $ten_sp=$_POST['TenSP'];

            $SoLuong=$_POST['SoLuong'];
            $ten_loai=$_POST['LoaiSP'];
            $nha_cung_cap=$_POST['NCC'];
            $gia=$_POST['GiaSP'];
            $sql="UPDATE `sanpham` SET `ten_loai`='$ten_loai',`ten_sp`='$ten_sp',`gia`='$gia',`hinh_anh`='$hinhanh2',`soluong`='$SoLuong',`nha_cung_cap`='$nha_cung_cap' WHERE `ma_sp`='$_POST[suasp]'";
            mysqli_query($this->con,$sql); 
            move_uploaded_file($HinhAnh_tmp2,'http://localhost/live1/mvc/public/image/'.$hinhanh2);
            header ('location:  http://localhost/live1/sanpham');
        }
    }
    
    public function xoa(){
        if(isset($_POST['xoa'])){
            $sql="DELETE FROM `sanpham` WHERE ma_sp='$_POST[xoa]'";
            mysqli_query($this->con,$sql);
            header ('location:  http://localhost/live1/sanpham ');
        }
    }
}