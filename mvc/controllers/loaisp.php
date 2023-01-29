<?php
class loaisp extends controller{
    
    public function SayHi(){
        $post = $this -> model('mdloaisp');
        $this->view("master1", [
            "page" => "loaiSP",
            "data" => $post->dataloai(),  
            "themloai"=>$post->themloai(),
            "xoaloai"=>$post->xoaloai(),
          ]);
    }

}