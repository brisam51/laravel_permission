@if (Session::has('success'))
<div class="alert alert-success">
   {{ Session('success')}}
</div>
@endif

@if (!empty(Session('errors')))
<div class="alert alert-danger">
   {{ Session('errors')}}
</div>
@endif
