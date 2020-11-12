@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between mb-3">
    <h6>Student / Edit / {{ $student->name }}</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
</div>

@include('admin.inc.errors')

<form action="{{ route('admin.students.update') }}" method="POST">
@csrf
    <input type="hidden" name="id" value="{{ $student->id }}">
    <div class="form-group">
        <lable>Name</lable>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}">
    </div>

    <div class="form-group">
        <lable>Email</lable>
        <input type="email" name="email" class="form-control" value="{{ $student->email }}">
    </div>

    <div class="form-group">
        <lable>Speciality</lable>
        <input type="text" name="spec" class="form-control" value="{{ $student->spec }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
