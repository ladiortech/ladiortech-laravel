<nav class="navbar-default navbar-static-side" role="navigation">
   <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
         <li class="nav-header">
            <div class="dropdown profile-element">
               <img alt="image" class="rounded-circle" src="{!! asset('admin/img/profile_small.jpg') !!}"/>
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <span class="block m-t-xs font-bold">David Williams</span>
               <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
               </a>
               <ul class="dropdown-menu animated fadeInRight m-t-xs">
                  <li><a class="dropdown-item" href="">Profile</a></li>
                  <li><a class="dropdown-item" href="">Contacts</a></li>
                  <li><a class="dropdown-item" href="">Mailbox</a></li>
                  <li class="dropdown-divider"></li>
                  <li>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </li>
               </ul>
            </div>
            <div class="logo-element">
               LD
            </div>
         </li>
         <li class="active">
            <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
         </li>
         <li>
            <a href="{!! route('attendance') !!}" aria-expanded="false">
            <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span></a>
         </li>
      </ul>
   </div>
</nav>