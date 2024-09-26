<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
@include('layout.navbar')

  @include('layout.sidebar')

  <main id="main" class="main" style="height: 680px;">

    <div class="pagetitle">
      <h1>@yield('pagetitle')</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"></a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </nav>
    </div>

   @yield('content')
  </main>



 @include('layout.footer')


  @include('layout.script')

</body>

</html>
