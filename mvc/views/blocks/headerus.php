<?php
if (isset($_POST["dangxuat"])) {
  unset($_SESSION["thongtin"]);
  header("Location:http://localhost/live1/thanhtoan");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>VIGIANG PS</title>
</head>
<link rel="stylesheet" href="./fontawesome/css/all.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
  }

  .button {
    background-color: crimson;
    color: white;
    padding: 5px 12px;

    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: white;
  }

  header {
    background-color: #0066FF;
    padding: 10px 0 10px 0;
  }

  a:hover {
    color: black;

  }

  a {
    text-decoration: none;
    color: white;
    font-size: 20px;

  }

  p {
    margin: 10px 0 10px 0;
  }

  .title h3 {

    font-size: 32px;
    text-decoration: underline;
    color: rgba(245, 40, 50, 1);
  }

  .header {
    background-color: #FFFFCC;
    width: 100%;
    display: flex;

  }

  .b {
    width: 1000px;
  }

  .a {
    text-align: right;
    list-style: none;
    margin-right: 30px;
    font-weight: bold;
    font-family: Arial;
  }

  .button {
    background-color: crimson;
    border: none;
    color: white;
    padding: 8px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 1px 2px;
    cursor: pointer;
    -webkit-animation-duration: 0.4s;
    /* Safari */
    transition-duration: 0, 4s;
    border-radius: 4px;
  }

  .button1 {
    background-color: #FFFFCC;
    color: #0066FF;
    border: 2px solid #FFFFCC;
  }

  .button1:hover {
    background-color: #0066FF;
    color: white;
  }

  .button2 {
    background-color: #FFFFCC;
    color: seagreen;
    border: 2px solid #FFFFCC;
  }

  .button2:hover {
    background-color: seagreen;
    color: white;
  }
</style>
<header class="header" style="padding-left:30px">
  <div class="a">
    Hotline: 0799 743 329 |
    Email: Vigiangps@gmail.com
  </div>

</header>
<div class="b">
  <form method="post">

    <?php if (!empty($_SESSION['thongtin'])) {
      foreach ($_SESSION['thongtin'] as $user) { ?>
        <b style="color: black; padding-left:3px">Xin chào: <?php echo $user["ten"]; ?></b>
        <button class="button button1" name="dangxuat" type="submit">Đăng xuất</button>
      <?php } ?>
    <?php } else {
      echo "";
    } ?>
    <button type="submit" class="button button1" name="doimkkh">Đổi mật khẩu</button>
    <button class="button button1 " type="submit" name="btndangnhap">Đăng nhập</button>
    <button class="button button2" type="submit" name="btndangky">Đăng ký</button>
    <b style="padding-left:50px">Bạn chưa đăng nhập</b>

  </form>

</div>
<?php

if (isset($_POST['doimkkh'])) {
  header('Location:http://localhost/live1/quenmkkhachhang');
}
if (isset($_POST['btndangnhap'])) {
  header('Location:http://localhost/live1/dangnhap');
}
if (isset($_POST['btndangky'])) {
  header('Location:http://localhost/live1/dangky');
}

?>