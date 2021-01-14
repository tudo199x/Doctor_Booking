@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Đơn Thuốc Của Tôi</div>

                <div class="card-body">
                 
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th scope="col">Ngày Giờ</th>
                          <th scope="col">Bác Sỹ</th>
                          <th scope="col">Bệnh</th>
                          <th scope="col">Triệu Chứng</th>
                          <th scope="col">Thuốc</th>
                          <th scope="col">Quy Trình Sử Dụng Thuốc</th>
                          <th scope="col">Phản Hồi Của Bác Sỹ</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($prescriptions as $prescription)
                        <tr>
                         
                          <td>{{$prescription->date}}</td>
                          <td>{{$prescription->doctor->name}}</td>
                          <td>{{$prescription->name_of_disease}}</td>
                          <td>{{$prescription->symptoms}}</td>
                          <td>{{$prescription->medicine}}</td>
                          <td>{{$prescription->procedure_to_use_medicine}}</td>
                          <td>{{$prescription->feedback}}</td>
                        </tr>
                        @empty
                        <td>Bạn không có đơn thuốc</td>
                        @endforelse
                       
                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
