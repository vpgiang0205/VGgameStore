<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chu</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
</head>
<body>  
    <div class = "header">
     <?php   require_once "./mvc/views/blocks/headerus.php";?>
    </div>

    <div class = "menu">
     <?php   require_once "./mvc/views/blocks/menuus.php";?>
    </div>

    <div class = "content"> 
    <?php require_once "./mvc/views/pages/".$data["page"].".php"?>
    </div>

    <div class = "footer">
     <?php   require_once "./mvc/views/blocks/footerus.php";?>
    </div>
    


  
</body>
</html>