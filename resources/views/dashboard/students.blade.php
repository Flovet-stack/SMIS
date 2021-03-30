@extends('layouts.app')


@section('main-content')
<h4>Students</h4>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td> <button class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection