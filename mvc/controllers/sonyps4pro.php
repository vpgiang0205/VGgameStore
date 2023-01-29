<?php 

  class sonyps4pro extends controller {
         
     function SayHi() {
      $post = $this->model('mdtatcasanpham');
      $this->view("master3", [
        "page" => "sony-ps4pro",
        "datagame"=>$post->showps4(),
      ]);
     }
         
     
  }  

?>