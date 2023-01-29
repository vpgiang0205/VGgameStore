
<?php 
        if (isset($_POST["trove"])){
            unset($_SESSION["thongtin"]);
            unset($_SESSION["usertemp"]);
            header("Location:http://localhost/live1/homeus");
        }
    ?> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" 
      rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Đổi mật khẩu</title>
<style type="text/css">
body {  
    width: 100%;
}
 
#box {  
border: 1px solid rgb(200, 200, 200);   
box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px; 
background:#00CCCC;
border-radius: 4px; top:50px;
}
 
h2{    
text-align:center;  
color:black;
}
p{ 
    text-align:center; 
}
</style>
<div class="container-fluid" style="height: 500px;"> 
 <div class="row-fluid"> 
  <div class="col-md-offset-4 col-md-4" id="box"> 
   <h2>Đổi Mật Khẩu</h2> 
   <p>nhập mật khẩu mới</p>
   <hr> 
   <form class="form-horizontal"  method="post" id="login_form"> 
    <fieldset> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="tendn" class="form-control" type="text" readonly value="<?php echo $_SESSION['usertemp']?>"> 
       </div> 
       
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input type = "password"name="mk" placeholder="New Password" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 

     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input type = "password"name="mk2" placeholder=" ReEnter New Password" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 

     <div class="form-group"> 
      <div class="col-md-12">
      <div class="form-check">
      <button type="submit" class="btn btn-outline-primary pull-right" name="doimk">Xác nhận</button>
           <button type= "submit"class="btn btn-outline-primary pull-right" name ="trove">Về đăng nhập</button>
      </div> 
     </div> 
    </fieldset> 
   </form> 
  </div> 
 </div>
</div>


