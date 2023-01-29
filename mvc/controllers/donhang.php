<?php 

  class donhang extends controller {
         
     function SayHi() {
     $post= $this->Model("mddonhang");
      $this->view("master1", [
        "page" => "donhang",
        "showdh" => $post->showdh(),
        "getdh"=>$post->getdh(),
        "suadh"=>$post->suadh(),
      
      ]);
     }
  }  

?>