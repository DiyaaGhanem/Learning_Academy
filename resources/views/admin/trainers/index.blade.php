@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainers</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.create') }}">Add new</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Spec</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
@foreach($trainers as $t)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>
          <img src="{{ asset('uploads/trainers/'. $t->img) }}" height="50px" alt="">
      </td>
      <td>{{ $t->name }}</td>
      <td>
     @if($t->phone !== null)
      {{ $t->phone }}
      @else 
        not exist
      @endif
      </td>
      <td>{{ $t->spec }}</td>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('admin.trainers.edit', $t->id) }}">Edit</a>
        <a class="btn btn-sm btn-danger" href="{{ route('admin.trainers.delete', $t->id) }}">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>



@endsection