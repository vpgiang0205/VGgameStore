<?php

class App{
    //controller/action/params/....

    protected $controller = "admdangnhap" ; 
    protected $action= "SayHi" ;
    protected $params=[] ;  

    function __construct()
    { 
        //Array ( [0] => Home [1] => sayHi [2] => 1 [3] => 2 [4] => 3 )
        $arr= $this->xualiURL();
        
// Xu li controller
        if (isset($arr[0])){
            $this->controller = $arr[0];
            if( file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
//Xu li acction- function
       if(isset($arr[1])){
        if (method_exists($this->controller , $arr[1]) ){
            $this->action = $arr[1];
        }
        unset($arr[1]);
    }
   
    // Xu li tham số (parameters)
    $this->params = $arr?array_values($arr):[];
    $action= $this->action;
    $controller= new $this->controller;
    
    call_user_func_array([$controller, $action], $this->params);

}


       


    function xualiURL() {

       //Home/sayHi/1/2/3
        if(isset($_GET['url'])){

            return explode("/",filter_var(trim($_GET['url'], "/")));

        }
        // else{
        //   echo "Chưa có đường dẫn";
        // }
       
    }
}


?>