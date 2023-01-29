

<!-- <div style=" border: 2px solid black; width:600px;">Đăng Nhập
<form method="post">
    <div>
        <input name="user" type="text" placeholder="Tài Khoản">
        <br>
        <input type="text" name="pass" placeholder="Mật Khẩu">
        <br>
        <input name="dangnhap" type="submit" value="Đăng Nhập">
    </div>
</form>
</div> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" 
      rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
 
h2 {    
text-align:center;  
color:black;
}
</style>
<b>Trang chủ > Đăng nhập</b><br>
<div class="container-fluid" style="height: 500px;"> 
 <div class="row-fluid"> 
  <div class="col-md-offset-4 col-md-4" id="box"> 
   <h2>Xác minh</h2> 
   <hr> 
   <form class="form-horizontal"  method="post" id="login_form"> 
    <fieldset> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="email" placeholder="Email" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="user" placeholder="Username" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12">
      <div class="form-check">
            <button class="btn btn-outline-primary mr-1 pull-right" type="submit" name="xacnhan">Xác nhận</button>
            <a href="http://localhost/live1/dangnhap"><button type= "button"class="btn btn-outline-primary pull-right">Về đăng nhập</button></a> 
            <a href="http://localhost/live1/dangky"><button type= "button"class="btn btn-outline-primary pull-right">Đăng ký</button></a> 
      </div> 
     </div> 
    </fieldset> 
   </form> 
  </div> 
 </div>
</div>


