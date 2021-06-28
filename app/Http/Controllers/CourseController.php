<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Course;
use Auth;
use App\UserCourse;
use App\Enrollments;

class CourseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Courses = Course::all();
        return view('index', compact('Courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submitbuttontext = "Create";
        return view('courses.create', compact('submitbuttontext'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'description' => 'required',
            'thumbnail' => 'required',
            'title' => 'required',
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $course = Course::create($input);
        \Session::flash('flash_message', 'Một khóa học mới đã được tạo!');
        $author = User::find($course->user_id);
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $text = UserCourse::where('user_id' , '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $enroll = (isset($text))?$text->course_enrolled:'';
            $comp = UserCourse::where('user_id', '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $complete = (isset($comp) && $comp->course_completed == 1)?$comp->course_completed:false;
        } else {
            $enroll = false;
            $complete = false;
        }
        $author = User::find($course->user_id);
        return view('courses.singlecourse', compact('course', 'author', 'enroll', 'complete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $submitbuttontext = "Edit Course";
        return view('courses.edit', compact('course', 'submitbuttontext'));
    }

    public function enroll(Course $course)
    {
        if (Auth::guest()) {
            return redirect(route('login'));
        }
        //add enroll request to admin dashboard
        $enrollment = Enrollments::create([
            'user_id' => Auth::id(),
            'course_id' => $course->id,
            'status' => 0,
        ]);
        $enrollment->save();
        \Session::flash('flash_message', 'Yêu cầu của bạn đã được gửi, Bạn sẽ có thể xem nội dung khóa học sau khi quản trị viên chấp thuận yêu cầu của bạn!');
        return redirect(route('home'));
    }

    public function unenroll(Course $course)
    {
        //detach record from user-course.
        UserCourse::where('user_id', '=', Auth::id())
                    ->where('course_id', '=', $course->id)
                    ->delete();
        \Session::flash('flash_message', 'Bạn đã hủy khóa học');
        return redirect(route('home'));
    }

    public function complete(Course $course)
    {
        UserCourse::where('user_id', '=', Auth::id())
                    ->where('course_id', '=', $course->id)
                    ->update(['course_completed' => 1]);
        \Session::flash('flash_message', 'Khóa học đã hoàn thành');
        return redirect(route('course.show', [$course->id]));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course, Request $request)
    {
        $input = $request->all();
        $input['thumbnail'] = $request->file('thumbnail')->store('images');
        $course->update($input);
        \Session::flash('flash_message', 'Khóa học đã được cập nhật');
        return redirect(route('course.edit',[$course['id']]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($r)
    {
        $course = Course::find($r);
        $course->delete();
        \Session::flash('flash_message', 'Đã xóa khóa học');
        // dd($course);
        return redirect(route('course.index'));
    }
}
