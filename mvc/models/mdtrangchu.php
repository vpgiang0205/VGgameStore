<?php
class mdtrangchu extends db{

    public function tongsp(){

        $sql = "SELECT COUNT(ma_sp) as 'tong_sp' FROM `sanpham`";
            $Query = mysqli_query($this->con,$sql); 
            return $Query; 

    }

    public function tongdon(){
        $sql = "SELECT COUNT(`ma_dh`) as 'tong_don' FROM `dondathang`";
        $Query = mysqli_query($this->con,$sql); 
        return $Query; 

    }

    public function tongkh(){
        $sql = "SELECT COUNT(`ma_kh`) as 'tong_kh' FROM `khach_hang`";
        $Query = mysqli_query($this->con,$sql); 
        return $Query; 
    }
    public function tonggia(){
        $sql = "SELECT SUM(`gia_ban`) as 'tong gia' FROM `ct_dondathang`";
        $Query = mysqli_query($this->con,$sql); 
        return $Query; 
    }
}
?>