<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<style type="text/css">
* {

margin: 0;
padding: 0;
}
.container {
max-width: 1140px;
margin-left: auto;
margin-right: auto;
}
.row {
display: flex;
max-width: 100%;
flex-wrap: wrap;
margin-left: -15px;
margin-right: -15px;
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
color: rgba(245,40,50,1);
}
.col-2 {
flex: 0 0 16.666667%;
max-width: 16.666667%;
}
.col-3 {
flex: 0 0 25%;
max-width: 25%;
}
.col-8 {
flex: 0 0 66.666667%;
max-width: 66.666667%;
}
.col-2th {
flex: 0 0 20%;
max-width: 20%;
}
.col-12 {
flex: 0 0 100%;
max-width: 100%;
}
.menu ul li {

float: left;
margin-left: 20px;
list-style: none;

}
.menu {
display: flex;
justify-content: flex-end;
align-items: center;
}
ul.menu_child {
position: absolute;
width: 225px;
background-color: #0066FF;
z-index: 9999;

}
ul.menu_child li {
padding: 15px 0 0 0 ;
float: none;
display: none;
}
.menu ul li:hover ul.menu_child li {
display: block;
}
/*Slider*/
    .mySlides {
        display: none;
    }
    .slideshow-container {
      max-width: 80%;
      position: relative;
      margin: unset;
	  
    }
    img {
        vertical-align: middle;
    }
    .prev , .next{
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bolder;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
    .next {
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4} 
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4} 
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}
/*end slider*/
.slider-margin {
margin-top: 20px;
}
.image img {
width: 100%;
}
.card {
margin-bottom: 20px;
}
footer {
display: block;
background-color: rgba(0,0,0,0.8);
padding: 20px 0 10px 0;
}
ul.menu_footer li {
list-style: none;
}
.footer {
padding-bottom: 20px;
}
.footer h3 {
color: rgba(100,255,10,1);
}
.copy_right {
padding: 10px 0 0px 0;
text-align: center;
border-top: 1px solid #fff;
}
.sticky-top {
position: sticky;
top: 0;
z-index: 1;
}
.header {
  background-color: #FFFFCC;
  width: 100%;
  height: 40px;
}

</style>

<div class="container slider-margin">
<b>Trang chủ > Sản phẩm > game </b>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="mvc/uploads/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="mvc/uploads/slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="mvc/uploads/slider3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		<div class="row">
			<div class="col-12 title">
				<h3 style="text-decoration: none">Sản phẩm</h3>
			</div>
		</div>
		<div class="row">
    <?php while($row=mysqli_fetch_assoc($data['datagame'])):?>
		<div class="col-2th">
			<div class="card">
				<div class="image">
				<img src="./mvc/uploads/gameps5.jpg">
				</div>
				<div class="name">
        <a href="chitietsp1/id/<?php echo $row['ma_sp']?>" style="color:black"><?php echo $row['ten_sp']?></a>
				</div>
				<div class="price">
					<p><?php echo $row['gia']?> VNĐ  </p> 
					<button type="button" class="btn btn-success">Thêm vào giỏ hàng</button>
				</div>
			</div>
		</div>
		<?php endwhile;?>
			</div>
      

		</div>
	</div>
   