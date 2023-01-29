<?php 

  class giohang extends controller {
         
     function SayHi() {
      $post = $this->model('mdgiohang');
    
      $this->view("master3", [
        "page" => "giohang",
        "cong"=>$post->tangsl(),
        "giam"=>$post->giamsl(),
        "xoa"=>$post->xoa(),
        "xoa"=>$post->xoatc(),
        "kt"=>$post->ktsoluong(),
      ]);
     }
     function id($ma_sp){

      $post = $this->model('mdgiohang');
     
      $this->view("master3",[
        "page"=> "giohang",
        "layma"=>$post->layid($ma_sp),
        
      ]);
     }
       
     
  }  

?>