<?php
class mdthongke extends db{

    public function tientheoTG(){
        if(isset($_POST['TK_ngay']))
        {
            $tungay = $_POST['tungay'];
            $denngay = $_POST['denngay'];
            $sql = "SELECT sum(ct.gia_ban)as tonggia FROM ct_dondathang ct ,dondathang dh WHERE ct.ma_dh=dh.ma_dh AND dh.ngay_dh BETWEEN '$tungay' AND '$denngay'";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        else{
            $sql = "SELECT sum(ct.gia_ban)as tonggia FROM ct_dondathang ct ,dondathang dh WHERE ct.ma_dh=dh.ma_dh  ";
            $query = mysqli_query($this->con,$sql);
            
        }
        return $query;
        
    }
    // SELECT  kh.ten_kh ten, sum(ct.gia_ban) tonggia, COUNT(dh.ma_dh) tongdon FROM dondathang dh , ct_dondathang ct, khach_hang kh WHERE ct.ma_dh=dh.ma_dh AND dh.ma_kh=kh.ma_kh AND dh.ngay_dh BETWEEN '2021/12/01' AND '2021/12/03' GROUP BY dh.ma_kh ORDER BY COUNT(dh.ma_kh) DESC LIMIT 0,1
    
    public function KHmuanhieu(){
            $sql = "SELECT kh.sdt sdt , kh.email email, kh.ten_kh ten, sum(ct.gia_ban) tonggia, COUNT(dh.ma_dh) tongdon FROM dondathang dh , ct_dondathang ct, khach_hang kh WHERE ct.ma_dh=dh.ma_dh AND dh.ma_kh=kh.ma_kh  GROUP BY dh.ma_kh ORDER BY COUNT(dh.ma_kh) DESC LIMIT 0,1";
            $query = mysqli_query($this->con,$sql);
            return $query;
    
    }

    public function KHtheoTG(){
        if(isset($_POST['TK_khach']))
        {
            $tungay = $_POST['tungaykh'];
            $denngay = $_POST['denngaykh'];
            $sql = "SELECT kh.ten_kh ten, kh.sdt sdt, dh.ma_dh madon, ct.gia_ban gia, dh.ngay_dh ngaydat FROM dondathang dh, khach_hang kh, ct_dondathang ct WHERE kh.ma_kh = dh.ma_kh AND dh.ma_dh = ct.ma_dh AND dh.ngay_dh BETWEEN '$tungay' AND '$denngay'";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        else{
            $sql = "SELECT kh.ten_kh ten, kh.sdt sdt, dh.ma_dh madon, ct.gia_ban gia, dh.ngay_dh ngaydat FROM dondathang dh, khach_hang kh, ct_dondathang ct WHERE kh.ma_kh = dh.ma_kh AND dh.ma_dh = ct.ma_dh ";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        
    }

    public function SPmuanhieu()
    {
        $sql="SELECT sp.ten_sp tensp, ct.ma_sp masp,sum(ct.gia_ban) tongtien, COUNT(ct.ma_dh) tongdon FROM ct_dondathang ct, sanpham sp, dondathang dh WHERE ct.ma_sp = sp.ma_sp AND ct.ma_dh=dh.ma_dh GROUP BY ct.ma_sp ORDER BY COUNT(ct.ma_sp) DESC LIMIT 0,1";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }
    // SELECT sp.ten_sp tensp, ct.ma_sp masp,ct.ma_dh madon, ct.gia_ban gia, dh.ngay_dh ngaydat FROM ct_dondathang ct, sanpham sp, dondathang dh WHERE ct.ma_sp = sp.ma_sp AND ct.ma_dh=dh.ma_dh AND dh.ngay_dh BETWEEN '2021/12/01' AND '2021/12/05'
    public function SPtheoTG(){
        if(isset($_POST['TK_SP']))
        {
            $tungay = $_POST['tungaysp'];
            $denngay = $_POST['denngaysp'];
            $sql = "SELECT sp.ten_sp tensp, ct.ma_sp masp,ct.ma_dh madon, ct.gia_ban gia, dh.ngay_dh ngaydat FROM ct_dondathang ct, sanpham sp, dondathang dh WHERE ct.ma_sp = sp.ma_sp AND ct.ma_dh=dh.ma_dh AND dh.ngay_dh BETWEEN '$tungay' AND '$denngay'";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        else{
            $sql = "SELECT sp.ten_sp tensp, ct.ma_sp masp,ct.ma_dh madon, ct.gia_ban gia, dh.ngay_dh ngaydat FROM ct_dondathang ct, sanpham sp, dondathang dh WHERE ct.ma_sp = sp.ma_sp AND ct.ma_dh=dh.ma_dh";
            $query = mysqli_query($this->con,$sql);
            return $query;
        }
        
    }
}