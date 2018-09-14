<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link {{Request::is('admin/create') ? 'active' : ''}}" href="{{url('admin/create')}}">Crear articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('admin/posts') ? 'active' : ''}}" href="{{url('admin/posts')}}">Mis articulos</a>
  </li>
</ul>