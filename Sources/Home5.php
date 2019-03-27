<?php include("Template_index.php");?>
<head>
    <style>
      * {
  box-sizing:border-box
}
h2 {
  text-align: center;
}
/* Slideshow container */
.slideshow-container {
  max-width: 720px;
 
  position: relative;
  margin: auto;
}
/* Ẩn các slider */
.mySlides {
    display: none;
}
/* Định dạng nội dung Caption */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
 
/* định dạng các chấm chuyển đổi các slide */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* khi được hover, active đổi màu nền */
.active, .dot:hover {
  background-color: #717171;
}
 
/* Thêm hiệu ứng khi chuyển đổi các slide */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}
 
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 </style>
</head>
<div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <br>   
             <br>
             <div class="slideshow-container">
  <h2 color="red">Thực phẩm sạch 24h.com </h2>
  
 
  <div class="mySlides fade">
    <img src="bia2.jpg" style="width:100%">
    <div class="text">Chăm sóc từ tận tâm</div>
  </div>
 
  <div class="mySlides fade">
    <img src="bia3.jpg" style="width:100%">
    <div class="text">Cẩn thận trong từng khâu</div>
  </div>
  <div class="mySlides fade">
    <img src="bia4.jpg" style="width:100%">
    <div class="text">Cung cấp những sản phẩm sạch</div>
  </div>
</div>
<br>
 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 

</div>

<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 6000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

</script>
<br>
<div style="font-size:17px;">
<p style=" font-weight:bolder;">Công ty TNHH Đầu tư Phát triển Sản xuất Nông nghiệp VinEco - một thành viên của Tập Đoàn Vingroup - đã chính thức tham gia vào lĩnh vực nông nghiệp ngày 19 tháng 3 năm 2015.
Với mục tiêu đưa thương hiệu nông sản Việt Nam lên đấu trường quốc tế, VinEco còn tích cực tham gia các hội chợ quốc tế: Thaifex (hội chợ quốc tế về thực phẩm và đồ uống hàng đầu châu Á); tuần hàng Việt Nam tại Rungis Pháp (chợ đầu mối lớn nhất thế giới về nông sản); Gulfood 2017, 2018 (hội chợ thường niên lớn nhất thế giới về nông sản, thực phẩm và đồ uống tại Dubai)… và đã gây ấn tượng mạnh mẽ với bạn bè quốc tế khi là doanh nghiệp trẻ nhưng có quy mô và đầu tư bài bản cùng hệ thống nông sản đặc trưng hoàn toàn “made in Vietnam”.

Với người tiêu dùng, thương hiệu VinEco trở thành nguồn cung cấp nông sản uy tín, đảm bảo nguồn thực phẩm sạch, an toàn cho sức khỏe cộng đồng. Với các hộ sản xuất và các doanh nghiệp hoạt động trong lĩnh vực nông nghiệp, VinEco trở thành cầu nối thị trường và đơn vị tiên phong nông sản sạch, góp phần thúc đẩy sự phát triển của toàn ngành nông nghiệp Việt Nam.</p>
       
        <h4 style="color:red; text-align:center; font-size:20px;">Thông tin liên hệ</h4>
        <p>Tầng 5, Toà nhà A Đây Rồi, Số 458 Minh Khai, khu đô thị Vinhomes Times City, Q. Hai Bà Trưng, TP. Hà Nội.
        Số điện thoại : 0981611911. Email: info.vineco@vingroup.net</p>
</div>