@extends('layout.app')


@section('title')
@endsection
Permission List

@section('pagetitle')
@endsection



@section('content')
    <div class="card">
        <div class="card-body">
            @include('auth.message')
            <div class="float-start">Permission List</div>

            <a href="{{ url('permission/create') }}" class=" mt-4 btn btn-primary float-end">Add New Permission</a>


            <!-- Default Table -->

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">created</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($permission as $value )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>
                            <a href="{{url('permission/edit/'.$value->id)}}"class='btn btn-success'>Edit</a>
                            <a href="{{url('permission/delete/'.$value->id)}}"class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                    @endforeach





                </tbody>

            </table>

            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
