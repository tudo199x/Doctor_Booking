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
            <p> Chăm sóc bằng tài năng, y đức và sự . </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Đăng Kí Là Bệnh Nhân</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Đăng Nhập</button></a>
            </div>
        </div>
    </div>
    <hr>
<!--Search doctor-->
<form action="{{url('/')}}" method="GET">
    <div class="card">
        <div class="card-body">
            <div class="card-header">Tìm Kiếm Bác Sỹ</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Tìm Kiếm Bác Sỹ</button>

                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</form>

    <!--display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="card-header"> Bác Sỹ </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hình Ảnh</th>
                            <th>Tên</th>
                            <th>Chuyên Môn</th>
                            <th>Lịch Hẹn</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse($doctors as $doctor)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="{{asset('images')}}/{{$doctor->doctor->image}}" width="100px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{$doctor->doctor->name}}
                            </td>
                            <td>
                                {{$doctor->doctor->department}}
                            </td>
                            <td>
                                <a href="{{route('create.appointment',[$doctor->user_id,$doctor->date])}}"><button class="btn btn-success">Book Appointment</button></a>
                            </td>
                        </tr>
                        @empty
                        <td>Hiện Tại Chưa Có Bác Sĩ Nào </td>
                        @endforelse


                    </tbody>
                </table>
                
            </div>
        </div>
        
    </div>
</div>
@endsection
