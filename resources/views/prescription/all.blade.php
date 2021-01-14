@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >
       
                     Appointment ({{$patients->count()}})
                 </div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Hình Ảnh</th>
                          <th scope="col">Ngày Tháng</th>
                          <th scope="col">Người Dùng</th>
                          <th scope="col">Email</th>
                          <th scope="col">Số Điện Thoại</th>
                          <th scope="col">Giới Tính</th>

                          <th scope="col">Thời Gian</th>
                          <th scope="col">Bác Sỹ</th>
                          <th scope="col">Trạng Thái</th>
                          <th scope="col">Đơn Thuốc</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($patients as $key=>$patient)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="" width="80" style="border-radius: 50%;">
                          </td>
                          <td>
                                             
</td>
                          <td>{{$patient->user->name}}</td>
                          <td>{{$patient->user->email}}</td>
                          <td>{{$patient->user->phone_number}}</td>
                          <td>{{$patient->user->gender}}</td>
                          <td>{{$patient->time}}</td>
                          <td>{{$patient->doctor->name}}</td>
                          <td>
                            @if($patient->status==1)
                             checked
                             @endif
                          </td>
                          <td>
                              <!-- Button trigger modal -->
              
                   <a href="{{route('prescription.show',[$patient->user_id,$patient->date])}}" class="btn btn-secondary">View prescription</a>
                  

                               
                          </td>
                        </tr>
                        @empty
                        <td>There is no any appointments !</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
