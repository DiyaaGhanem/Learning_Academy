@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between mb-3">
    <h6>Students / Show Courses</h6>
    <div>
      <a class="btn btn-sm btn-info" href="{{ route('admin.students.addCourse', $student_id) }}">Add To Course</a>
      <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
    </div>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($courses as $c)
       <tr>
         <td>{{ $loop->iteration }}</td>
           <td>
             {{ $c->name }}
          </td>
          <td>
             {{ $c->pivot->status }}
          </td>

        <td>
            @if($c->pivot->status == 'pending' || $c->pivot->status == 'reject')
            <a class="btn btn-sm btn-info" href="{{ route('admin.students.approveCourse', [$student_id, $c->id]) }}">Approve</a>
            @endif

            @if($c->pivot->status == 'pending' || $c->pivot->status == 'approve')            
            <a class="btn btn-sm btn-danger" href="{{ route('admin.students.rejectCourse', [$student_id, $c->id]) }}">Reject</a>
            @endif            
      </td>
        </tr>
    @endforeach
 </tbody>
</table>


@endsection