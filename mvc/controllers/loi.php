<?php
class loi extends controller{
    
    public function SayHi(){
      
        $this->view("master1", [
            "page" => "loi",
          ]);
    }

}