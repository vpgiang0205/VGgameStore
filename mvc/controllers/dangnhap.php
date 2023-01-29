<?php 

  class dangnhap extends controller {
         
     function SayHi() {
      $post = $this->model('mddangky');
      $this->view("master3", [
        "page" => "dangnhap",
        "dn"=>$post->dangnhap(),
      ]);
     }
     function Show(){
        
     }
  }  

?>