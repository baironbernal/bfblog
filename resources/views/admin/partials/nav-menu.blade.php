<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link {{Request::is('admin/create') ? 'active' : ''}}" href="{{url('admin/create')}}">Crear articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('admin/posts') ? 'active' : ''}}" href="{{url('admin/posts')}}">Ver articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>