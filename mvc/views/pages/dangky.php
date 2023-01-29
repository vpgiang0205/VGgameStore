<!-- <div style=" border: 2px solid black; width:600px;">block của đăng kí, búm
<a href="http://localhost/live/home">về home</a> để thấy view home
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
background:#00FFCC;
border-radius: 4px; top:50px;
}
 
h2 {    
text-align:center;  
color:black;
}
</style>
<b>Trang chủ > Đăng ký tài khoản</b><br>
<div class="container-fluid" style="height: 700px;"> 
      <div class="row-fluid"> 
            <div class="col-md-offset-4 col-md-4" id="box"> 
                  <h2>Đăng ký</h2> 
                  <p style="color: red">Nếu bạn có một tài khoản, xin vui lòng chuyển qua trang đăng nhập.</p>
                  <hr> 
                  <form class="form-horizontal" method="post" id="login_form"> 
                        <fieldset> 
                              <div class="form-group"> 
                                    <div class="col-md-12"> 
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="tentk" placeholder="Tên tài khoản" class="form-control" type="text" required> </div> 
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input type="password" name="matkhau" placeholder="Mật khẩu" class="form-control" type="text"required> </div> 
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="Tên" placeholder="Tên" class="form-control" type="text"required> </div> 
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="ho" placeholder="Họ" class="form-control" type="text"required></div>
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span> <input name="email" placeholder="Email" class="form-control" type="text"required> </div> 
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input name="sdt" placeholder="Số điện thoại" class="form-control" type="text"required> </div> 
                                          <br>
                                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span> <input name="diachi" placeholder="Địa Chỉ" class="form-control" type="text"required> </div> 
                                          <br>
                                          <label for="gioitinh">Giới tính</label>
                                          <select name="gioitinh" required>
                                                <option value="1" >Nam</option>
                                                <option value="0" >Nữ</option>
                                          </select>
                                    </div> 
                              </div> 
                              <div class="form-group"> 
                                    <div class="col-md-12">
                                          <div class="form-check">
                                                <button class="btn btn-outline-primary mr-1 pull-right" type="submit" name="btn_dangky">Đăng ký</button>
                                                <a href="http://localhost/live1/dangnhap"><button class="btn btn-outline-primary pull-right">Đăng nhập</button></a> 
                                          </div> 
                                    </div> 
                              </div> 
                        </fieldset> 
                  </form> 
            </div> 
      </div>
</div>
