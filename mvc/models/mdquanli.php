<?php
class mdquanli extends db{
    
    public function dataad()
    {
        if(isset($_POST['Tim'])&& $_POST['tukhoa']!=""){
            
            $tenad = $_POST['tukhoa'];
            $sql = "SELECT * FROM adm where ten_dn like'%$tenad%'";
            $query = mysqli_query($this->con,$sql);
            return $query; 
        }
        else{
           
            $sql = "SELECT * FROM adm";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }

    }

    public function themad()
    {
        if(isset($_POST['themad'])){
            
            $ho=$_POST['ho'];
            $ten=$_POST['ten'];
            $tendn=$_POST['tendn'];
            $matkhau=$_POST['matkhau'];
            $quyen=$_POST['quyen'];
            $gioi=$_POST['gioi'];
            $email=$_POST['email'];
            $sql = "INSERT INTO adm (`ho`, `ten`, `ten_dn`, `mat_khau`, `level`, `gioi_tinh`,email) values ('$ho', '$ten', '$tendn', '$matkhau', '$quyen','$gioi','$email')";      
            return mysqli_query($this->con,$sql); 
            header('Location: http://localhost/live1/quanli');
           
        }
    }

    public function getadid()
    {
        if (isset($_POST['xem'])) {
            $sql = "SELECT * FROM adm where ma_adm = '$_POST[xem]'";
            return mysqli_query($this->con,$sql); 
        }elseif (isset($_POST['sua'])){
            $sql = "SELECT * FROM adm where ma_adm = '$_POST[sua]'";
            return mysqli_query($this->con,$sql);
        }
    }

    public function suaad()
    {
        if(isset($_POST['suaad'])){
            $ho=$_POST['ho'];
            $ten=$_POST['ten'];
            $tendn=$_POST['tendn'];
            $matkhau=$_POST['matkhau'];
            $quyen=$_POST['quyen'];
            $gioi=$_POST['gioi'];
            $email=$_POST['email'];
            $sql="UPDATE adm SET ho='$ho', ten='$ten',ten_dn = '$tendn', mat_khau='$matkhau', level = '$quyen', gioi_tinh = '$gioi', email = '$email' WHERE ma_adm = '$_POST[suaad]'";
            
            mysqli_query($this->con,$sql); 
            header('Location: http://localhost/live1/quanli');
            
        }
    }
    
    public function xoaad(){
        if(isset($_POST['xoaad'])){
            $sql="DELETE FROM `adm` WHERE ma_adm='$_POST[xoaad]'";
            mysqli_query($this->con,$sql);
            header('Location: http://localhost/live1/quanli');
        }
    }
}