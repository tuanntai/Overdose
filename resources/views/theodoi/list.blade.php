@extends('layouts.index')
@section('content')

@if (session('flash_message'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif

@if ($theodois->isEmpty())
    <div class="card-body">
        <h2 class="alert alert-info">Không có Nguoi đăng ký mới</h2>
    </div>
@else
    <div class="card-body">
        <h2 class="alert alert-info">Yêu cầu Đăng ký Theo dõi</h2>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Điện Thoại</th>
 
        </tr>
        </thead>
        <tbody>
            @foreach ($theodois as $theodois)
                <tr style="background-color: #F8F3E2;">
                    <td >{{ $theodois->id }}</td>
                    <td>{{  $theodois->hoten }}</td>
                    <td>{{  $theodois->sdt }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection