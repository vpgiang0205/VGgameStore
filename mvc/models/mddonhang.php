<?php
class mddonhang extends db{
    
    public function showdh()
    {
        if(isset($_POST['Tim'])&& $_POST['tukhoa']!=""){
            $madh = $_POST['tukhoa'];
            $sql = "SELECT * FROM dondathang dh, khach_hang kh where dh.ma_kh = kh.ma_kh and dh.ma_dh = '$madh' ORDER BY hien_trang ASC";
            $query = mysqli_query($this->con,$sql);
            return $query; 
        }
        else{
           
            $sql = "SELECT * FROM dondathang dh, khach_hang kh where dh.ma_kh = kh.ma_kh ORDER BY hien_trang ASC";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }

    }

    public function themdh()
    {
        if(isset($_POST['themdh'])){
            
            $ten_sp=$_POST['TenSP'];
            $hinh_anh=0;
            $trangthai=0;
            $SoLuong=$_POST['SoLuong'];
            $ten_loai=$_POST['LoaiSP'];
            $nha_cung_cap=$_POST['NCC'];
            $gia=$_POST['GiaSP'];
            $sql = "INSERT INTO sanpham (`ten_loai`, `ten_sp`, `gia`, `hinh_anh`, `soluong`, `trang_thai`, `nha_cung_cap`) values ('$ten_loai', '$ten_sp', '$gia', '$hinh_anh', '$SoLuong','$trangthai','$nha_cung_cap')";      
            mysqli_query($this->con,$sql); 
            header ('location:  http://localhost/live1/sanpham ');
        }
    }

    public function getdh()
    {
        
        if(isset($_POST['chitiet'])){
            if ($_SESSION['Ten'] == 'admin'){
                $sql = "SELECT * FROM dondathang dh, khach_hang kh where dh.ma_kh = kh.ma_kh and ma_dh = '$_POST[chitiet]'";
                $Query = mysqli_query($this->con,$sql); 
                return $Query;  
            }else
            {
                header ('location:  http://localhost/live1/loi');
            }
                    
        }
    }

    public function suadh()
    {
        if(isset($_POST['suadh'])){
            // $madh=$_POST['ma_dh'];
           
            $ngaydh=$_POST['ngaydh'];
            $ngaygh=$_POST['ngaygh'];
            $noigiao=$_POST['noigiao'];
            $hientrang=$_POST['hientrang'];
            
            $sql="UPDATE `dondathang` SET `ngay_dh`='$ngaydh',`ngay_gh`='$ngaygh',`noi_giao`='$noigiao',`hien_trang`='$hientrang' WHERE `ma_dh`='$_POST[suadh]'";
            mysqli_query($this->con,$sql); 
            header ('location:  http://localhost/live1/donhang ');
        }
    }
    
    // public function xoadh(){
    //     if(isset($_POST['xoa'])){
    //         $sql="DELETE FROM `dondathang` WHERE ma_dh='$_POST[xoa]'";
    //         mysqli_query($this->con,$sql);
    //         header ('location:  http://localhost/live1/donhang ');
    //     }
    // }
}