<?php 

  class Homeus extends controller {
         
     function SayHi() {
      $post = $this->model('mdHomeus');
      $this->view("master3", [
        "page" => "content",
        "sp" => $post->showsp(), 
        
      ]);
     }
    //  function chitietsp($id){
         
    //  }
  }  

?>