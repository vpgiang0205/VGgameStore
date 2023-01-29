<?php 
  class quenmkkhachhang extends controller {

  function SayHi() {
    $post = $this-> model('mddangnhap');
    $this->view("master3", [
    "page" => "quenmkkh",
    "checkbox" => $post->checkkh()
    ]);
  }
}

?>