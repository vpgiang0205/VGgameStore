<?php 

  class game extends controller {
         
     function SayHi() {
      $post = $this->model('mdtatcasanpham');
      $this->view("master3", [
        "page" => "game",
        "datagame"=>$post->game(),
        
      
      ]);
     }
         
     
  }  

?>