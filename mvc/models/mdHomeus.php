<?php
class mdHomeus extends db {

    public function showsp()
    {   
        if(isset($_POST['tim'])&& $_POST['tukhoa']!=""){
            $tensp = $_POST['tukhoa'];
            $sql = "SELECT * FROM sanpham WHERE ten_sp LIKE '%$tensp%'";
            $query = mysqli_query($this->con,$sql);
            return $query; 
        }
        else{
            $sql = "SELECT * FROM sanpham";
            $query = mysqli_query($this->con,$sql);
            return $query;
            header ('location:  http://localhost/live1/Homeus ');
        }
    }
}
?>