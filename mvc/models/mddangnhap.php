<?php
class mddangnhap extends db
{

  public function dataAdmin()
  {

    $sql = "SELECT* from adm";
    return mysqli_query($this->con, $sql);
  }
  public function dangnhap()
  {
    if (isset($_POST["dangnhap"])) {
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $getad = "SELECT * FROM adm Where ten_dn = '$user' and mat_khau = '$pass'";

      $result = mysqli_query($this->con, $getad);

      $row = mysqli_num_rows($result);

      if ($row > 0) {
        $_SESSION["Ten"] = $user;
        header('Location:http://localhost/live1/home');
      } else {
        echo "<script type='text/javascript'>alert('Sai tên đăng nhập hoặc mật khẩu! Vui lòng kiểm tra lại');</script>";
      }
    }
  }
  public function check()
  {

    if (isset($_POST['check'])) {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $checktn = "SELECT * FROM adm WHERE ten_dn = '$user' AND email = '$email'";
      $result = mysqli_query($this->con, $checktn);
      $row = mysqli_num_rows($result);
      if ($row > 0) {
        $_SESSION["Ten"] = $user;
        header('Location:http://localhost/live1/doimk');
      } else {
        echo "<script type='text/javascript'>alert('Email hoặc Tên đăng nhập không tồn tại');</script>";
      }
    }
  }
  public function doimk()
  {
    if (isset($_POST['doi'])) {
      if ($_POST['pass'] != "" && $_POST['pass2'] != "") {
        $ten_dn = $_POST['user'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        if ($pass == $pass2) {
          $check = "UPDATE adm SET mat_khau = '$pass' WHERE ten_dn = '$ten_dn'";
          mysqli_query($this->con, $check);
          header('Location: http://localhost/live1/');
        } else
          echo "<script type='text/javascript'>alert('Mật Khẩu không trùng khớp');</script>";
      } else {
        echo "<script type='text/javascript'>alert('Hãy điền đủ thông tin');</script>";
      }
    }
  }
  public function checkkh()
  {
    if (isset($_POST['xacnhan'])) {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $checktn = "SELECT * FROM khach_hang WHERE ten_dn = '$user' AND email = '$email'";
      $result = mysqli_query($this->con, $checktn);
      $row = mysqli_num_rows($result);
      if ($row > 0) {
        $_SESSION["usertemp"] = $user;
        header('Location:http://localhost/live1/doimkkh');
      } else {
        echo "<script type='text/javascript'>alert('Email hoặc Tên đăng nhập không tồn tại');</script>";
      }
    }
  }
  public function doimkkh()
  {
    if (isset($_POST['doimk'])) {
      if ($_POST['mk'] != "" && $_POST['mk2'] != "") {
        $ten_dn = $_POST['tendn'];
        $pass = $_POST['mk'];
        $pass2 = $_POST['mk2'];
        if ($pass == $pass2) {
          $check = "UPDATE khach_hang SET mat_khau = '$pass' WHERE ten_dn = '$ten_dn'";
          mysqli_query($this->con, $check);
          header('Location: http://localhost/live1/homeus');
        } else
          echo "<script type='text/javascript'>alert('Mật Khẩu không trùng khớp');</script>";
      } else {
        echo "<script type='text/javascript'>alert('Hãy điền đủ thông tin');</script>";
      }
    }
  }
}
