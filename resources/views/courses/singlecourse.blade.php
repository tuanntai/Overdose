@extends('layouts.index')
@section('content')

@if (session('flash_message'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif

@if (Auth::check() && Auth::id() == $author->id)
    <a href="{{ route('course.edit', [$course->id]) }}" class="btn btn-secondary" id= "course_button">Sửa khóa học</a>
    {!! Form::open(['method' => 'delete', 'route' => ['course.destroy', $course->id]]) !!}
    <input type="submit" value="Xóa khóa học" class="btn btn-danger" id= "course_button">
    {!! Form::close() !!}
@endif
<div class="jumbotron">
    <div class="course-title">
        <h1 class = "display-4">{{ $course->title }}</h4>
    </div>

    <div class="course-image">
        <img src="{{$course->thumbnail}}" alt="">
    </div>

    <div class="published">
        <h6>Published on: {{ $course->created_at->toFormattedDateString() }}</h6>
    </div>
    <div class="author">
        <h6 class= "lead">Author: {{ $author->name }}</h6>
    </div>

    <div class="description">
        <h5 class= "">{{ $course->description }}</h5>
    </div>

    @if ($enroll == true && Auth::user()->role->first()->name == "Student" )
        <div class="course-content">
            <p class = "lead">{{ $course->description }}</p>
        </div>
        <div class="course-button">
            @if ($complete == false)
                <br></br>
                <a href="{{ route('course.complete', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Hoàn thành</a>
                <br></br>
            @endif
            <a href="{{ route('course.unenroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg">Hủy</a>
        </div>
    @else
        @if ($complete == false)
            <a href="{{ route('course.enroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Đăng ký</a>
        @endif
    @endif
    
</div>
@endsection