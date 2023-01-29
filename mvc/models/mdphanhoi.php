<?php
class mdphanhoi extends db{

    public function dataph(){
        $sql = "SELECT * from lien_he";
       return mysqli_query($this->con,$sql);
    }
}