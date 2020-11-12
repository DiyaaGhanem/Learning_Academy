@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Students</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.students.create') }}">Add new</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Speciality</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
@foreach($students as $st)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
        <td>
            @if($st->name !== null)
            {{ $st->name }}
            @else 
              not exist
            @endif
        </td>
      <td>{{ $st->email }}</td>
        <td>
            @if($st->spec !== null)
            {{ $st->spec }}
            @else 
              not exist
            @endif
        </td>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('admin.students.edit', $st->id) }}">Edit</a>
        <a class="btn btn-sm btn-danger" href="{{ route('admin.students.delete', $st->id) }}">Delete</a>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.showCourses', $st->id) }}">Show Courses</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>



@endsection