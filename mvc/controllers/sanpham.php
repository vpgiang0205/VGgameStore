<?php
class sanpham extends controller{
    
    public function SayHi(){
        $post = $this -> model('mdsanpham');
        $post2 = $this -> model('mdloaisp');
        $this->view("master1", [
            "page" => "sanpham",
            "showsp"=>$post->showsp(),
            "themsp"=>$post->themsp(),
            "getttsp"=>$post->getttsp(),
            "luusua"=>$post->suasp(),
            "xoa"=>$post->xoa(),
            "showloai"=>$post2->dataloai(),
          ]);
    }

}