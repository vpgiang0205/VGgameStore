<?php 

  class taycamchoigame extends controller {
         
     function SayHi() {
      $post = $this->model('mdtatcasanpham');
      $this->view("master3", [
        "page" => "taycamgame",
        "datagame"=>$post->xbox(),
        
      
      ]);
     }
         
     
  }  

?>