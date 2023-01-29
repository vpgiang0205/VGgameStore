<?php
class mdchitietsp1 extends db{

    public function layid($ma_sp){
         
        $sql="select * from sanpham where ma_sp = '$ma_sp'";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }

 
    

}


?>