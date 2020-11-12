@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between mb-3">
    <h6>Trainers / Edit / {{ $course->name }}</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.index') }}">Back</a>
</div>

@include('admin.inc.errors')

<form method="POST" action="{{ route('admin.courses.update') }}" enctype="multipart/form-data">
@csrf

        <input type="hidden" name="id" value="{{ $course->id }}">

    <div class="form-group">
        <lable>Course Name</lable>
        <input type="text" name="name" class="form-control" value="{{ $course->name }}">
    </div>

  <div class="form-group">
    <select class="form-control" name="cat_id">
    @foreach($cats as $cat)
       <option value="{{ $cat->id }}" @if ($course->cat_id == $cat->id) selected @endif>{{ $cat->name }}</option>
    @endforeach
    </select>
 </div>


<div class="form-group">
    <select class="form-control" name="trainer_id">
    @foreach($trainers as $t)
       <option value="{{ $t->id }}" @if ($course->trainer_id == $t->id) selected @endif>{{ $t->name }}</option>
    @endforeach
    </select>
 </div>

        <div class="form-group">
            <lable>Small desc</lable>
            <input type="text" name="small_desc" class="form-control" value="{{ $course->small_desc }}">
        </div>


    <div class="form-group">
        <lable>Desc</lable>
        <textarea name="desc" class="form-control" cols="30" rows="10">{{ $course->desc }}</textarea>
    </div>

    <div class="form-group">
        <lable>price</lable>
        <input type="text" name="price" class="form-control" value="{{ $course->price }}">
    </div>

         <img src="{{ asset('uploads/courses/'. $course->img) }}" height="100px" alt="" class="my-5">

    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
