<?php
//file này chứa model và view để dễ dùng
class Controller {
    public function model($model) {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    //mac ao vao`: view
    public function view($view, $data=[]) {
        require_once "./mvc/views/".$view.".php";
    }


}
?>