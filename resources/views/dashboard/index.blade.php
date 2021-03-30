@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" >
@endsection

@section('main-content')

<h3>{{ Auth::user()->name }} Dashboard</h3>
<small>User management panel</small>
<hr>
 <section class="d-menu">
 <div class="m-item">
     <i class="fa fa-user"></i>
     <a href=""> Add Students</a>
 </div>
 <div class="m-item">
     <i class="fa fa-eye"></i>
     <a href="{{ route('students') }}">View Students</a>
 </div>
 <div class="m-item">
     <i class="fa fa-book"></i>
     <a href="{{ route('courses') }}">Courses</a>
 </div>
 <div class="m-item">
     <i class="fa fa-cog"></i>
     <a href="{{ route('my-courses') }}">My Courses</a>
 </div>
 </section>
@endsection