<?php include("TEMPLATE(CLIENT).php");?>
<head>
    <style>
       * {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
    width:800px;
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
 </style>
</head>
<div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <br>
         
                
			     
             <br>
             <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="ban1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="ban2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="ban3.jpg" style="width:100%">
  </div>
    
  

  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="ban1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Tết Samsung trúng 99 lượng vàng">
    </div>
    <div class="column">
      <img class="demo cursor" src="ban2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Tết sắm Oppo lì xì đến 1 triệu">
    </div>
    <div class="column">
      <img class="demo cursor" src="ban3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Xem phim gần chết không hết data">
    </div>
   
    
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<br>
<div style="font-size:17px;">
<p style=" font-weight:bolder;">Công ty TNHH Đầu tư Phát triển Sản xuất Nông nghiệp VinEco - một thành viên của Tập Đoàn Vingroup - đã chính thức tham gia vào lĩnh vực nông nghiệp ngày 19 tháng 3 năm 2015.
Với mục tiêu đưa thương hiệu nông sản Việt Nam lên đấu trường quốc tế, VinEco còn tích cực tham gia các hội chợ quốc tế: Thaifex (hội chợ quốc tế về thực phẩm và đồ uống hàng đầu châu Á); tuần hàng Việt Nam tại Rungis Pháp (chợ đầu mối lớn nhất thế giới về nông sản); Gulfood 2017, 2018 (hội chợ thường niên lớn nhất thế giới về nông sản, thực phẩm và đồ uống tại Dubai)… và đã gây ấn tượng mạnh mẽ với bạn bè quốc tế khi là doanh nghiệp trẻ nhưng có quy mô và đầu tư bài bản cùng hệ thống nông sản đặc trưng hoàn toàn “made in Vietnam”.

Với người tiêu dùng, thương hiệu VinEco trở thành nguồn cung cấp nông sản uy tín, đảm bảo nguồn thực phẩm sạch, an toàn cho sức khỏe cộng đồng. Với các hộ sản xuất và các doanh nghiệp hoạt động trong lĩnh vực nông nghiệp, VinEco trở thành cầu nối thị trường và đơn vị tiên phong nông sản sạch, góp phần thúc đẩy sự phát triển của toàn ngành nông nghiệp Việt Nam.</p>
       
        <h4 style="color:red; text-align:center; font-size:20px;">Thông tin liên hệ</h4>
        <p>Văn phòng điều hành:
Công ty TNHH Một Thành Viên Công Nghệ Thông Tin Thế Giới Di Động Lô T2-1.2 đường D1, Khu Công Nghệ Cao, Phường Tân Phú, Quận 9, TP.HCM
Số điện thoại: 028 38125960
E-mail: investor@thegioididong.com</p>
</div>