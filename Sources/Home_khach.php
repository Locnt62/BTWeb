<?php include("TEMPLATE_khach.php");?>
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
                <img src="tgdd_chuan.png" width="1000px" heigth="100px" style="padding-bottom:2px;">
                
			     
             <br>
             <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="thegioididong1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="tgdd2.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="tgdd3.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="tgdd4.png" style="width:100%">
  </div>

  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="thegioididong1.png" style="width:100%" onclick="currentSlide(1)" alt="Tết Samsung trúng 99 lượng vàng">
    </div>
    <div class="column">
      <img class="demo cursor" src="tgdd2.png" style="width:100%" onclick="currentSlide(2)" alt="Tết sắm Oppo lì xì đến 1 triệu">
    </div>
    <div class="column">
      <img class="demo cursor" src="tgdd3.png" style="width:100%" onclick="currentSlide(3)" alt="Xem phim gần chết không hết data">
    </div>
    <div class="column">
      <img class="demo cursor" src="tgdd4.png" style="width:100%" onclick="currentSlide(4)" alt="Sắm loa đón tết giảm ngay 20%">
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
<p style=" font-weight:bolder;">Công ty Cổ phần Đầu tư Thế Giới Di Động (MWG) là nhà bán lẻ số 1 Việt Nam về doanh thu và lợi nhuận, với mạng lưới hơn 2000 cửa hàng trên toàn quốc. MWG vận hành các chuỗi bán lẻ thegioididong.com, Điện Máy Xanh (bao gồm chuỗi Trần Anh), Bách Hoá Xanh, cùng trang thương mại điện tử Vuivui.com.

Thegioididong.com được thành lập từ 2004 là chuỗi bán lẻ thiết bị di động có thị phần số 1 Việt Nam với hơn 1000 siêu thị hiện diện tại 63 tỉnh thành trên khắp Việt Nam.
Điện Máy Xanh, tiền thân là chuỗi Dienmay.com ra đời cuối 2010 và chính thức được đổi tên tháng 05/2015, là chuỗi bán lẻ các sản phẩm điện tử tiêu dùng (điện tử, điện lạnh và gia dụng) có thị phần số 1 Việt Nam với gần 700 cửa hàng hiện diện tại 63 tỉnh thành trên khắp Việt Nam
Bách Hóa Xanh được đưa vào thử nghiệm cuối năm 2015, là chuỗi cửa hàng chuyên bán lẻ thực phẩm tươi sống (thịt cá, rau củ, trái cây…) và nhu yếu phẩm với hơn 350 siêu thị tại TPHCM. .
Trang thương mại điện tử VUIVUI.COM được ra đời cuối năm 2016 với sứ mệnh đem đến cho khách hàng trải nghiệm mua sắm trực tuyến phong phú, an toàn, thuận tiện cùng giá cả cạnh tranh.
MWG tập trung xây dựng dịch vụ khách hàng khác biệt với chất lượng vượt trội, phù hợp với văn hoá đặt khách hàng làm trung tâm trong mọi suy nghĩ và hành động của công ty.

MWG vinh dự là đại diện Việt Nam duy nhất lọt vào bảng xếp hạng TOP 50 công ty niêm yết tốt nhất Châu Á 2017 của tạp chí uy tín Forbes và nhận được giải thưởng danh giá TOP 5 nhà bán lẻ vượt trội Châu Á – Thái Bình Dương (Best-of-the-Best Award) do Tạp chí bán lẻ châu Á (Retail Asia) và Tập đoàn nghiên cứu thị trường Euromonitor bình chọn. MWG nhiều năm liền có tên trong các bảng xếp hạng danh giá như TOP 500 nhà bán lẻ hàng đầu Châu Á – Thái Bình Dương (Retail Asia) và TOP 50 công ty kinh doanh hiệu quả nhất Việt Nam (Nhịp Cầu Đầu Tư)… Sự phát triển của MWG cũng là một điển hình tốt được nghiên cứu tại các trường Đại học hàng đầu như Harvard, UC Berkeley, trường kinh doanh Tuck (Mỹ).

Không chỉ là một doanh nghiệp hoạt động hiệu quả được nhìn nhận bởi nhà đầu tư và các tổ chức đánh giá chuyên nghiệp, MWG còn được người lao động tin yêu khi lần thứ 3 liên tiếp được vinh danh trong TOP 50 Doanh nghiệp có môi trường làm việc tốt nhất Việt Nam.</p>
       
        <h4 style="color:red; text-align:center; font-size:20px;">Thông tin liên hệ</h4>
        <p>Văn phòng điều hành:
Công ty TNHH Một Thành Viên Công Nghệ Thông Tin Thế Giới Di Động Lô T2-1.2 đường D1, Khu Công Nghệ Cao, Phường Tân Phú, Quận 9, TP.HCM
Số điện thoại: 028 38125960
E-mail: investor@thegioididong.com</p>
</div>