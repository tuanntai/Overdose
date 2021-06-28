@extends('layouts.index')

@section('content')
@if (session('flash_message'))
    <div class="card-body"  style="background-color: #F8F3E2;">
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif
@if (Auth::check() && (Auth::user()->role->first()->name == 'Author' or Auth::user()->role->first()->name == "Admin"))
    <a href="{{ route('course.create') }}" class="btn btn-secondary" id="course_button">Tạo khóa học</a>
@endif
<div class="container" id = "coursescontent" style="background-color: #F8F3E2;">
    <div class="row">
        <div class="col-md-12"  >
            @if ($courses->isEmpty())
                @if (session('course'))
                    <div class="card-body">
                        <h2 class="alert alert-info">
                            {{ __('Không có khóa học !!!') }}
                        </h2>
                    </div>
                @endif
            @else
            <h1 class="my-4">Tất cả khóa học</h1>
            @foreach ($courses as $course)

            <div class="card mb-4">
               
                <div class="card-body" >
                    <h2 class="card-title"><a href = "{{ route('course.show', [$course->id]) }}">{{ $course['title'] }}</a></h2>
                    {{-- <p class="card-text">{{ $course['description'] }}</p> --}}
                </div>
                <div class="card-footer text-muted" style="background-color: #EDDFC9;">
                <a style="color: #000000; font-size:18px">Tác giả: {{ $course->author['name'] }}</a>
                </div>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</div>




@endsection