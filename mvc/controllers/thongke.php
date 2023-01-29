<?php 

  class thongke extends controller {
         
     function SayHi() {
      $post = $this->model('mdthongke');
      $post1 = $this->model('mdtrangchu');
      $this->view("master1", [
        "page" => "thongke",
        "gia"=> $post1-> tonggia(),
        "tienTN"=> $post->tientheoTG(),
        "Khmuanhieu"=> $post->KHmuanhieu(),
        "KHtheoTG"=> $post->KHtheoTG(),
        "SPmuanhieu"=> $post->SPmuanhieu(),
        "SPtheoTG"=> $post->SPtheoTG(),
      ]);
     }
  }  

?>