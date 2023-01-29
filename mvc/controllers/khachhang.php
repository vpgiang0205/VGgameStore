<?php 
  class khachhang extends controller {

  function SayHi() {
    $post =  $this->Model("mdkhachhang");
    $this->view("master1", [
    "page" => "khachhang",
    "GetKHID"=>$post->GetKHID(),
    "GetKH"=>$post->GetKH(),
    "themkh"=>$post->ThemKH(),
    "xoa"=>$post->XoaKH(),
    "suakh"=>$post->SuaKH(),
    ]);
  }
}

?>