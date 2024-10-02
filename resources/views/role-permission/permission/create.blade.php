
  @extends('layout.app')


  @section('title')

  @endsection


  @section('pagetitle')

  @endsection



  @section('content')
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New Permission</h5>

@include('auth.message')
      <form action="{{url('permission/store')}}" method="POST">
        @csrf
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Permissiom Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputText">
            
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
