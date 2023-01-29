<?php
class mdloaisp extends db{

    public function dataloai(){
        $sql = "SELECT* from loai_sanpham";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }

    public function themloai(){
        if(isset($_POST['btn-themloai'])){
            if($_POST['ThemLoai']!=""){
                $ten_loai = $_POST['ThemLoai'];
                $sql = "INSERT INTO `loai_sanpham`(`ten_loai`) VALUES ('$ten_loai')";
                $Query=mysqli_query($this->con,$sql); 
                header ('location:  http://localhost/live1/loaiSP');
            }
            else{
                echo "<script> alert('Vui lòng điền tên loại ! ')</script> ";
            }
           
        }
    }

    public function xoaloai(){
        if(isset($_POST['xoaloai'])){
            $sql="DELETE FROM `loai_sanpham` WHERE ma_loai='$_POST[xoaloai]'";
            $Query = mysqli_query($this->con,$sql);
            header ('location:  http://localhost/live1/loaiSP ');
           
        }
        
    }
}