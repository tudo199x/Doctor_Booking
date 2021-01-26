@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xin Chào Đến Với Bệnh Viện VinMec</div>

                <div class="card-body">
 
                  Bạn Đang Đăng Nhập Với Tư Cách 
                  {{Auth()->user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
