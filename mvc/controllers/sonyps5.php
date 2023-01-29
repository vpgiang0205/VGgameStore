<?php 

  class sonyps5 extends controller {
         
     function SayHi() {
      $post = $this->model('mdtatcasanpham');
      $this->view("master3", [
        "page" => "sony-ps5",
        "datagame"=>$post->showps5(),
      
      ]);
     }
         
     
  }  

?>