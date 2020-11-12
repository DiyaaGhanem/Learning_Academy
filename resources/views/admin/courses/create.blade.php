@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between mb-3">
    <h6>Courses / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.index') }}">Back</a>
</div>
@include('admin.inc.errors')

<form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <lable>Course Name</lable>
        <input type="text" name="name" class="form-control">
    </div>

  <div class="form-group">
    <select class="form-control" name="cat_id">
    @foreach($cats as $cat)
       <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
    </select>
 </div>


<div class="form-group">
    <select class="form-control" name="trainer_id">
    @foreach($trainers as $t)
       <option value="{{ $t->id }}">{{ $t->name }}</option>
    @endforeach
    </select>
 </div>

        <div class="form-group">
            <lable>Small desc</lable>
            <input type="text" name="small_desc" class="form-control">
        </div>


    <div class="form-group">
        <lable>Desc</lable>
        <textarea name="desc" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <lable>price</lable>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
