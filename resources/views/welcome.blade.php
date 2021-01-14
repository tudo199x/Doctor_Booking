@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/online-medicine-concept_160901-152.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Tạo tài khoản và đặt cuộc hẹn ngay </h2> <br>
              <h2>Hệ thống Y tế Vinmec</h2>
            <p> Vinmec là Hệ thống Y tế phi lợi nhuận do Vingroup 
             Tập đoàn kinh tế tư nhân hàng đầu Việt Nam đầu tư phát triển với sứ mệnh
             “Chăm sóc bằng tài năng, y đức và sự thấu cảm". </p>
             <h2>Tầm nhìn</h2>
            <p>Vinmec cam kết phát triển hệ thống y tế hàn lâm vươn tầm quốc tế thông qua những nghiên cứu đột phá, 
                nhằm mang lại chất lượng điều trị xuất sắc và dịch vụ chăm sóc hoàn hảo. </p>
             <h2>Sứ mệnh</h2>
            <p> Chăm sóc bằng tài năng, y đức và sự  </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Đăng Kí Là Bệnh Nhân</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Đăng Nhập</button></a>
            </div>
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection
