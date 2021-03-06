<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      <li><a href="{{route('company.index')}}"><i class="fa fa-building"></i> <span>Companies</span></a></li>
      <li><a href="{{route('employee.index')}}"><i class="fa fa-users"></i> <span>Employees</span></a></li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>