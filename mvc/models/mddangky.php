<?php
class mddangky extends db{
    public function dangky(){
        if(isset($_POST['btn_dangky'])){
            $ten_dn = $_POST['tentk'];
            $mat_khau = $_POST['matkhau'];
            $ten_kh = $_POST['Tên'];
            $ho_kh = $_POST['ho'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $dia_chi = $_POST['diachi'];
            $gioi_tinh = $_POST['gioitinh'];
            $sql = "SELECT * FROM `khach_hang` WHERE `ten_dn`=' $ten_dn'";
            $query = mysqli_query($this->con,$sql);
            $row= mysqli_num_rows($query);
            if($row == 0){
                $sql1 = "INSERT INTO `khach_hang`( `ho_kh`, `ten_kh`, `sdt`, `dia_chi`, `email`, `gioi_tinh`, `ten_dn`, `mat_khau`) VALUES ('$ho_kh','$ten_kh','$sdt','$dia_chi','$email', '$gioi_tinh', '$ten_dn','$mat_khau')";
                $query1 = mysqli_query($this->con,$sql1);

                $sql2="SELECT * FROM `khach_hang` WHERE `ten_dn`='$ten_dn'";
                $query2 = mysqli_query($this->con,$sql2);
                $data1 = mysqli_fetch_assoc($query2);
                $ma_kh1=$data1['ma_kh'];
                $ten_dn1 = $data1['ten_dn'];
                $mat_khau1 = $data1['mat_khau'];
                $ten_kh1 = $data1['ten_kh'];
                $ho_kh1 = $data1['ho_kh'];
                $email1 = $data1['email'];
                $sdt1 = $data1['sdt'];
                $dia_chi1 = $data1['dia_chi'];
                $gioi_tinh1 = $data1['gioi_tinh'];
                $arr =array(['ma_kh'=>$ma_kh1,'tentk'=>$ten_dn1,'email'=>$email1, 'ho'=>$ho_kh1, 'sdt'=>$sdt1, 'ten'=>$ten_kh1, 'dia_chi'=>$dia_chi1]);
                if(!empty($_SESSION['thongtin'])){
                    unset($_SESSION['thongtin']);
                }else{
                    $_SESSION['thongtin']=$arr;
                    header('location:  http://localhost/live1/thanhtoan');
                }
            }else{
                echo "<script> alert('Tài khoản đã tồn tại ! ')</script> ";
            }  
        }
        // var_dump($_SESSION['thongtin']);
        // unset($_SESSION['thongtin']);
    }
    public function dangnhap(){
        if (isset($_POST['dangnhap'])){
            $tendn = $_POST['tendn'];
            $mk = $_POST['mk'];
            $sql2="SELECT * FROM `khach_hang` WHERE `ten_dn`='$tendn' and mat_khau = '$mk'";
            $query = mysqli_query($this->con,$sql2);
            $row= mysqli_num_rows($query);
            if($row == 1){
                $data2 = mysqli_fetch_assoc($query);
                $ma_kh2=$data2['ma_kh'];
                $ten_dn2 = $data2['ten_dn'];
                $mat_khau2 = $data2['mat_khau'];
                $ten_kh2 = $data2['ten_kh'];
                $ho_kh2 = $data2['ho_kh'];
                $email2 = $data2['email'];
                $sdt2 = $data2['sdt'];
                $dia_chi2 = $data2['dia_chi'];
                $gioi_tinh2 = $data2['gioi_tinh'];
                $arr =array(['ma_kh'=>$ma_kh2,'tentk'=>$ten_dn2,'email'=>$email2, 'ho'=>$ho_kh2, 'sdt'=>$sdt2, 'ten'=>$ten_kh2, 'dia_chi'=>$dia_chi2]);
                if(!empty($_SESSION['thongtin'])){
                    unset($_SESSION['thongtin']);
                }else{
                    $_SESSION['thongtin']=$arr;
                    header('location:  http://localhost/live1/thanhtoan');
                }
            }else{
                echo "<script> alert('Vui lòng kiểm tra lại! ')</script> ";
            }
        }
    }
}
?>