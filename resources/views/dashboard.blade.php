@extends('layouts.index')
@section('content')

@if (session('flash_message'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif


    <div class="card-body">
        <h2 class="alert alert-info">Tất cả yêu cầu đăng ký</h2>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Khóa học</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->user->name }}</td>
                    <td>{{ $enrollment->user->email }}</td>
                    <td>{{ $enrollment->course->title }}</td>
                    <td>
                        <a class="btn btn-success" href = "{{route('enrollment.approve', [$enrollment->user_id, $enrollment->course_id])}}">Phê duyệt</a>
                        <a class="btn btn-danger" href = "{{ route('enrollment.disapprove', [$enrollment->user_id, $enrollment->course_id]) }}">Hủy</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection