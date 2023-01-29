<?php 
    class mdkhachhang extends db{
        public function execute($sql)
        {
            $this->result = mysqli_query($this->con,$sql);
            return $this->result;
        }
        //đếm số bản ghi
        public function num_rows()
        {
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }
         //lay du lieu theo id"
         public function GetKHID()
         {
            if (isset($_POST['xem'])) {
                
                $sql = "SELECT * FROM dondathang dh, khach_hang kh where dh.ma_kh = kh.ma_kh and kh.ma_kh = '$_POST[xem]' ORDER BY hien_trang ASC";
                return mysqli_query($this->con,$sql); 
            }elseif (isset($_POST['sua'])){
                $sql = "SELECT * FROM khach_hang where ma_kh = '$_POST[sua]'";
                return mysqli_query($this->con,$sql);
            }
            
         }
         
        //lay du lieu"
        public function getData()
        {
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        //lay toan bo du lieu
        public function getAllData()
        {
            if(!$this->result){
                return FALSE;
            }else{
                while($data = $this->getData()){
                    $data[]=$data;
                }
            }
            return $data;
        }
        public function GetKH()
        {
            if(isset($_POST['Tim'])&& $_POST['tukhoa']!=""){
                $ma_kh = $_POST['tukhoa'];
                $sql = "SELECT * FROM khach_hang where ten_kh='$ma_kh'";
                $query = mysqli_query($this->con,$sql);
                return $query; 
            }
            else{
               
                $sql = "SELECT * FROM khach_hang";
                $query = mysqli_query($this->con,$sql);
                return $query;
            }
        }
        
        public function ThemKH(){
            if (isset($_POST['themkh'])){
            $hokh = $_POST['hokh'];
            $tenkh=$_POST["tenkh"];
            $email=$_POST["email"];
            $sdt=$_POST["sdt"];
            $diachi=$_POST["diachi"];
            $tendn=$_POST["tendn"];
            $mk=$_POST["matkhau"];
    
            $sql = "SELECT * FROM khach_hang WHERE ten_kh= '$tenkh'";
            $old = mysqli_query($this->con,$sql); 
            
            if(mysqli_num_rows($old)>0){
                echo "<script> alert('Thông tin khách hàng đã tồn tại');</script>";    
            }else{
               
                    $themkh = "INSERT INTO khach_hang (ho_kh,ten_kh, email, sdt, dia_chi, ten_dn, mat_khau) values ('$hokh','$tenkh', '$email', '$sdt', '$diachi','$tendn', '$mk')";      
                    mysqli_query($this->con,$themkh); 
                    header('Location:http://localhost/live1/khachhang');
                }
            }  
        }

        //sua du lieu du lieu
        public function SuaKH()
        {
            if (isset($_POST['suakh'])){
                $makh = $_POST['makh'];
                $hokh = $_POST['hokh'];
                $tenkh = $_POST['tenkh'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $tendn = $_POST['tendn'];
                $mk = $_POST['matkhau'];
            $suakh = "UPDATE khach_hang SET ho_kh = '$hokh', ten_kh='$tenkh', email='$email', sdt='$sdt', dia_chi='$diachi',ten_dn='$tendn', mat_khau='$mk'Where ma_kh = '$makh'";      
            $this->execute($suakh); 
            header('location:http://localhost/live1/khachhang');
            }
        }

        public function XoaKH()
        {   
            if (isset($_POST['xoa'])){
                
                $sql = "DELETE FROM khach_hang WHERE ma_kh='$_POST[xoa]'";
                $this->execute($sql);
                header('Location:http://localhost/live1/khachhang');
            }
            
        }
    }
?>