<?php
class quanli extends controller{
    
    public function SayHi(){
        $post = $this->Model("mdquanli");
        $this->view("master1", [
            "page" => "quanli",
           "dataad" => $post->dataad(),
            "Getadid" => $post->getadid(),
            "suaad" => $post->suaad(),
            "xoaad" => $post->xoaad(),
            "themad" => $post->themad()
        ]);
    }
}