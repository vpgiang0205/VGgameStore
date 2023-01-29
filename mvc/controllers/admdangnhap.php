<?php 
  class admdangnhap extends controller {
   public function SayHi() {
    $post = $this->model('mddangnhap');
    $this->view("dangnhap",[
      "page" => "admdangnhap",
      "data" => $post->dataAdmin(),
      "dangnhap" => $post->dangnhap(),
    ]);
  }
} 
?>