<?php 
        if (isset($_POST["dangxuat"])){
            session_destroy();
            header("Location:http://localhost/live1/");
        }
    ?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    .button {
    background-color: crimson;
    color: white;
    padding: 5px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: white;
}
.button1 {
    
    background-color: #1E90FF;
    color: white;
    padding: 5px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: white;
    }
    
    .button2 {
    
    background-color: #7366ff;
    color: white;
    padding: 5px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: white;
    }
    input[type=text] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    input[type=number] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    select {
        width: 90%;
        padding: 10px 20px;

        border-radius: 4px;;


    }
    label{
        color: black;
    }
    input[type=submit] {
        width: 50%;
        background-color: #1E90FF;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        
    }
    

    .flat-table {
        width: auto;
        margin-bottom: 20px;
        border-collapse:collapse;
        font-family: 'Lato', Calibri, Arial, sans-serif;
        border: none;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
    }
    .flat-table th, .flat-table td {
        box-shadow: inset 0 -1px rgba(0,0,0,0.25),
        inset 0 1px rgba(0,0,0,0.25);
    }
    .flat-table th {
        font-weight: bold;
        -webkit-font-smoothing: antialiased;
        padding: 1em;
        color: rgba(0,0,0,0.45);
        text-shadow: 0 0 1px rgba(0,0,0,0.1);
        font-size: 1.0em;
    }
    .flat-table td {
        color: black;
        padding: 0.7em 1em 0.7em 1.15em;
        text-shadow: 0 0 1px rgba(255,255,255,0.1);
        font-size: 1.0em;
    }
    .flat-table tr {
        -webkit-transition: background 0.3s, box-shadow 0.3s;
        -moz-transition: background 0.3s, box-shadow 0.3s;
        transition: background 0.3s, box-shadow 0.3s;
    }
    .flat-table-1 {
        background: white;
    }
    .flat-table-1 tr:hover {
        background: rgba(0,0,0,0.19);
    }
    .flat-table-2 tr:hover {
        background: rgba(0,0,0,0.1);
    }
    .flat-table-2 {
        background: #f06060;
    }
    .flat-table-3 {
        background: #52be7f;
    }
    .flat-table-3 tr:hover {
        background: rgba(0,0,0,0.1);
    }
    #hop-thoai-sua{
        visibility: hidden;
        opacity:0;
    }
    .hien-ra{
        visibility: visible;
        opacity:1;
    }
</style>
<body>
    <div style = "background-color:red">
        <div style="height: 100px; width: 100%; background-color: #1E90FF;">
            <img src="http://localhost/live1/mvc/public/image/logo.jpg" style="float:left; width:150px; padding-top:5px; padding-left:10px;">
            <div style="padding-left: 90%; padding-top:20px;">
                <b>Xin chào: <?php if(!empty ($_SESSION['Ten'])) {echo $_SESSION["Ten"]; } ?></b>           
            </div>
            <div>
            <a style="text-decoration: none;"  href="http://localhost/live1/home">
            <h2 style = "color:#ffcd45; line-height:0px; margin-right:130px;font-size:40px;padding-top:10px">Hệ Thống Quản Lí WebSite</h2></a>
            <form method="post" style="padding-left: 93%;">
            <button class="button"  name = "dangxuat" type="submit">Đăng xuất</button> 
            </form> 
                
        </div>

            
        </div>
    </div>

</body>
</html>