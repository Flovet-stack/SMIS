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
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->code }}</td>
            <td>{{ $course->title }}</td>
            <td> 
                <a href="{{ route('enroll', [$course->id]) }}" class="btn btn-sm btn-success">Enroll</a>
                <button class="btn btn-sm btn-danger">Delete</button>
           </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection