@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Các Cuộc Hẹn Của Bạn({{$appointments->count()}})</div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Bác Sỹ</th>
                          <th scope="col">Thời Gian</th>
                          <th scope="col">Cho Ngày</th>
                          <th scope="col">Tạo ngày</th>
                          <th scope="col">Trạng Thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($appointments as $key=>$appointment)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$appointment->doctor->name}}</td>
                          <td>{{$appointment->time}}</td>
                          <td>{{$appointment->date}}</td>
                          <td>{{$appointment->created_at}}</td>
                          <td>
                              @if($appointment->status==0)
                              <button class="btn btn-primary">Chưa Đến Hẹn</button>
                              @else 
                              <button class="btn btn-success">Đã kiểm Tra</button>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Bạn Hiện Không Có Cuộc Hẹn Nào Hết</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
