<?php 

  class chitietsp1 extends controller {
         
     function SayHi() {

      $this->view("master3", [
        "page" => "chi-tiet-ps5",
        
      
      ]);
     }
     function id($ma_sp){

      $post = $this->model('mdchitietsp1');
      $this->view("master3",[
        "page"=> "chi-tiet-ps5",
        "layma"=>$post->layid($ma_sp),
      ]);
     }
         
     
  }  

?>