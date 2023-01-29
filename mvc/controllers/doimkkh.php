<?php 
  class doimkkh extends controller {

  function SayHi() {
    $post = $this-> model('mddangnhap');
    $this->view("dangnhap", [
    "page" => "doimkkh",
    "doimkkh" => $post->doimkkh(),
    ]);
  }
}

?>