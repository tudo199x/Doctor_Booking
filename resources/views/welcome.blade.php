@extends('layouts.app')

@section('content')
<div class="timkiem-bg luoi-tai" style="background-image: url(banner/banner2.jpg);" data-src="/banner/banner2.jpg">
   <div><div class="timkiem">
       <div class="vung-bao">
           <h1>Doctor Booking <br><b>chăm sóc sức khỏe răng miệng</b></h1>
            <!-- <div class="timkiem-form" id="timkiem_form">
                <div class="timkiem-tieude">
                <h2 class="d-sm-none">Tìm kiếm</h2>
        <button type="button" id="timkiem_dong" class="nut-dong timkiem-dong">
            <span class="bt-g bt-g-xoa" aria-hidden="true"></span>
        </button></div>
        <div class="timkiem-onhap">
            <i class="bt-g bt-g-tim">
            <i class="fas fa-search"></i>
            </i>
            <input id="timkiem_chung" type="search" placeholder="Tìm chuyên khoa"></div><div id="timkiem_chung_ketqua" class="timkiem-ketqua">
                <h3>Chuyên khoa</h3>
            </div>
        </div> -->
        </div></div>
        <div class="luachon">
          <ul><li><a href="/#chuyenkhoa" class="mo-cuaso" dl-cuaso="chuyenkhoa"><div class="dichvu kham-chuyenkhoa luoi-tai" style="background-image: url(/images/tooth.png);" data-src=""></div> Khám <br>Răng miệng
         </a></li><li><a href="/#khamtuxa" class="mo-cuaso" dl-cuaso="khamtuxa"><div class="dichvu kham-tuxa luoi-tai" style="background-image: url(/images/tooth.png);" data-src=""></div> Vệ sinh <br> Răng miệng
         </a></li><li><a href="/#khamtongquat" class="mo-cuaso" dl-cuaso="khamtongquat"><div class="dichvu kham-tongquat luoi-tai" style="background-image: url(/images/tooth.png);" data-src=""></div> Trồng <br>Răng sứ
    
         </a></li></ul>
     </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/banner1.jpg" class="img-fluid" style="border:2px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2> Thông tin về hệ thống Doctor Booking </h2> <br>
              <h2>Hệ thống Y tế Doctor Booking</h2>
            <p> Doctor Booking là Hệ thống Y tế phi lợi nhuận do Vingroup 
             Tập đoàn kinh tế tư nhân hàng đầu Việt Nam đầu tư phát triển với sứ mệnh
             “Chăm sóc bằng tài năng, y đức và sự thấu cảm". </p>
             <h2>Tầm nhìn</h2>
            <p>Doctor Booking cam kết phát triển hệ thống y tế hàn lâm vươn tầm quốc tế thông qua những nghiên cứu đột phá, 
                nhằm mang lại chất lượng điều trị xuất sắc và dịch vụ chăm sóc hoàn hảo. </p>
             <h2>Sứ mệnh</h2>
            <p> Chăm sóc bằng tài năng, y đức và sự thấu cảm </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Đăng Kí </button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Đăng Nhập</button></a>
            </div>
        </div>
    </div>
    <hr>

    <div class="posts-wrap">
    <p style="color:white; background-color:#42afc2;font-size:25px; font-weight: bold;text-align:center">
    Các Chuyên Khoa Phổ Biến</p>
            <div class="posts-list" >
                <div class="posts-i">
                    <a class="posts-i-img" href="">
                        <span style="background: url()"><img src="/images/nk.jpg" class="img-fluid" style="border:2px solid #ccc;"></span>
                    </a>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg"></a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Khoa Khám Răng Miệng</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url()"><img src="/images/ch.jpg" class="img-fluid" style="border:2px solid #ccc;"></span>
                    </a>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg"></a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Khoa Vệ Sinh Răng Miệng</a> 
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url()"><img src="/images/ntk.jpg" class="img-fluid" style="border:2px solid #ccc;"></span>
                    </a>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg"></a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Khoa Chỉnh Hình Răng</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
<div class="container">
<div class="top">
    <div class="top__content">
        <img class="logo" src="/banner/logof.png" alt="">
        <div class="top__content__hero" >
            <h3 style="color:#455a5c; font-size:35px; font-weight: bold;text-align:center" >Các Bác Sĩ Nổi Bật </h3>
            <p style="color:#455a5c; font-size:16px; font-weight: light;text-align:center">Phó giáo sư,Bác sĩ Huỳnh Thị Ngọc <br>Khoa Vệ Sinh Răng </p>
        </div>
    </div>
    <div class="top__sub-content">
        <img  src="/images/ngocv.jpg" alt="">
    </div>
</div>
</div>


@endsection
