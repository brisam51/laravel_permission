<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
{{-- Start Dashboard Nav --}}
      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{ url('permission/list') }}">
          <i class="bi bi-grid"></i>
          <span>Permission</span>
        </a>
      </li><!-- End Manage Role Nav -->
{{-- start Manahe Role Nav --}}
      <li class="nav-item">
        <a class="nav-link " href="{{ url('/role/list') }}">
          <i class="bi bi-grid"></i>
          <span>Manage Role</span>
        </a>
      </li><!-- End Manage Role Nav -->


    </ul>

  </aside>
