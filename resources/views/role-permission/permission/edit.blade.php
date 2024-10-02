
@extends('layout.app')


@section('title')

@endsection


@section('pagetitle')

@endsection



@section('content')
<div class="card">
  <div class="card-body mt-5">
<h2>Edit Permission</h2>
@include('auth.message')
    <form action="{{url('permission/update/'.$permission->id)}}" method="post">
      @csrf
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Permissiom Name</label>
        <div class="col-sm-10">
          <input type="text" value="{{$permission->name}}"  name="name" class="form-control" id="inputText">
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
       <a href="{{url('permission/list')}}"  class="btn btn-secondary">Reset</a>
      </div>
    </form><!-- End Horizontal Form -->

  </div>
</div>
@endsection
