<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\RegisteredCourse;


class DashboardController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }


    public function index() {
        return view('dashboard.index');
    }

    public function students()
    {
       $students = User::all();
       return view('dashboard.students', ['students' => $students]);
    }


    public function courses()
    {
       $courses = Course::all();
       return view('dashboard.courses', ['courses' => $courses, 'title' => 'Courses']);
    }


    public function enrolledCourses(Request $request)
    {
        $courses = $request->user()->courses()->get();
        return view('dashboard.registered-courses', ['courses' => $courses, 'title' => 'My Registered Courses']); 
    }


    public function enroll($course_id, Request $request)
    {
      $course = Course::find($course_id);
      $r_course = RegisteredCourse::where('user_id', $request->user()->id)
                                ->where('course_id', $course_id)->first();

      if($r_course) {
          return redirect()->back()->withErrors(
              [
                  'registered' => 'You already enrolled for this course'
              ]
          );
      }
      $r_course = new RegisteredCourse();
      $r_course->course_id = $course->id;
      $request->user()->courses()->save($r_course);

      return redirect('/my-courses');
    }


}
