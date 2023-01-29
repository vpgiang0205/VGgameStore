<?php 
  class doimk extends controller {

  function SayHi() {
    $post = $this-> model('mddangnhap');
    $this->view("dangnhap", [
    "page" => "doimk",
    "doimk" => $post->doimk()
    ]);
  }
}

?>