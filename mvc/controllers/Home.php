<?php 

  class Home extends controller {
    
    function SayHi() {
      $post = $this->model('mdtrangchu');
      $this->view("master1", [
        "page" => "trangchu",
        "sp" => $post->tongsp(),  
        "dh" => $post->tongdon(),
        "kh" => $post->tongkh(),
        "gia"=> $post-> tonggia(),
      ]);  
} 
} 

?>