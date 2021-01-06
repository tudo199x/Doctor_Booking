@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> 

                     Cuộc Hẹn Của Bạn ({{$bookings->count()}})
                 </div>
             

                

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Hình Ảnh</th>
                          <th scope="col">Ngày Giờ</th>
                          <th scope="col">Người Dùng</th>
                          <th scope="col">Email</th>
                          <th scope="col">Số Điện Thoại</th>
                          <th scope="col">Giới Tính</th>

                          <th scope="col">Thời Gian</th>
                          <th scope="col">Bác Sỹ</th>
                          <th scope="col">Trạng Thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>{{$booking->date}}</td>
                          <td>{{$booking->user->name}}</td>
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
                          <td>{{$booking->user->gender}}</td>
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary"> Đang Đợi Kiểm Tra</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success"> Đã Kiểm Tra</button></a>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Hện Không Có Cuộc Hẹn Nào !</td>
                        @endforelse
                       
                      </tbody>
                    </table>

                </div>
                {{$bookings->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
