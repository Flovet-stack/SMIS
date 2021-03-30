@extends('layouts.app')


@section('main-content')
@error('registered')
  <div class='alert alert-danger'> {{ $message }}</div>
@enderror
<h4>{{$title}}</h4>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Course title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $r_course)
        <tr>
            <td>{{ $r_course->course->code }}</td>
            <td>{{ $r_course->course->title }}</td>
            <td> 
                <a href="#" class="btn btn-sm btn-success">View score</a>

           </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection