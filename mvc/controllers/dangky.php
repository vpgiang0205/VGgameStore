<?php 

  class dangky extends controller {
         
     function SayHi() {
      $post = $this->model('mddangky');
      $this->view("master3", [
        "page" => "dangky",
         "dk" => $post->dangky(),
      ]);
     }
  }  
?>