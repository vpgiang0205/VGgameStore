<?php 

  class tatcasanpham extends controller {
         
     function SayHi() {
      $post = $this->model('mdtatcasanpham');
      $this->view("master3", [
        "page" => "tatcasanpham",
         "datasp"=>$post->showsp(),
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