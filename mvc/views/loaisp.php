<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./mvc/public/css/fontawesome-free-5.15.4-web/css/all.min.css">
    <script type="text/javascript" src="./mvc/public/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./mvc/public/js/popupsua.js"></script>
</head>

<body>
<div id="header">
    <?php
        require_once "./mvc/views/blocks/header.php";
    ?>
</div>
<div id="menu" style="float: left;">
    <?php
        require_once "./mvc/views/blocks/menu.php";
    ?>
</div>
<div id="center" style="float:right;">
<?php

 require_once "./mvc/views/pages/".$data['page'].".php";
 ?>
</div>

</body>
</html>