<?php 
  class quenmk extends controller {

  function SayHi() {
    $post = $this-> model('mddangnhap');
    $this->view("dangnhap", [
    "page" => "quenmatkhau",
    "checkbox" => $post->check()
    ]);
  }
}

?>