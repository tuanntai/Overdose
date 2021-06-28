@extends('layouts.index')
@section('content')
@if (session('flash_message'))
    <div class="card-body" >
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif

{{-- <a href="{{ route('course.create') }}">{!! Form::button('Add New Course', ['class' => 'btn btn-secondary', 'id' => 'course_button']) !!}</a> --}}
<a href="{{ route('user.create') }}" class="btn btn-secondary" id="course_button">Thêm tài khoản</a>

<h1 class="my-4" >Tất cả tài khoản</h1>

<table  class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Thành phần</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr style="background-color: #F8F3E2;">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td> {{$user->role->first()->name}}
                    </td>
                    <td>
                        {!! Form::open(['method' =>"delete", 'action' => ['UserController@destroy', $user->id]]) !!}
                            <a class="btn btn-secondary" href = "{{route('user.edit', [$user->id])}}">Sửa</a>
                            {{-- <a class="btn btn-danger" href = "{{ route('user.destroy', [$user->id]) }}"> --}}
                                <input class="btn btn-danger" type = "submit" value = "Xóa">
                            {{-- </a> --}}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection