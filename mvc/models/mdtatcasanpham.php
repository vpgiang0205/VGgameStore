<?php
class mdtatcasanpham extends db {

    public function showsp()
    {   
        
       
            $sql = "SELECT * FROM sanpham";
            $query = mysqli_query($this->con,$sql);
            return $query;
            
       
    }
    public function showps5()
    {   
        
       
            $sql = "SELECT * FROM sanpham where ten_loai='Máy chơi game SONY PS5'";
            $query = mysqli_query($this->con,$sql);
            return $query;
            
       
    }
    public function showps4()
    {   
        
       
            $sql = "SELECT * FROM sanpham where ten_loai='Máy chơi game SONY PS4 Pro'";
            $query = mysqli_query($this->con,$sql);
            return $query;
            
       
    }
    public function xbox()
    {   
        
       
            $sql = "SELECT * FROM sanpham where ten_loai='Tay Cầm Chơi Game Xbox'";
            $query = mysqli_query($this->con,$sql);
            return $query;
            
       
    }
    public function game()
    {   
        
       
            $sql = "SELECT * FROM sanpham where ten_loai='Game'";
            $query = mysqli_query($this->con,$sql);
            return $query;
            
       
    }
}
?>