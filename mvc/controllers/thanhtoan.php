<?php 

  class thanhtoan extends controller {
         
    function SayHi() {
      $post = $this->model('mdthanhtoan');
      $this->view("master3", [
        "page" => "thanhtoan",  
        "thanhtoan"=>$post->ThanhToan(),

      ]);
    }
 }  

?>