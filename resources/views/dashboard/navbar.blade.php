<nav class="navbar navbar-expand px-4 py-3">
    <div class="navbar-collapse collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
             <img src="{{asset('assets_dashboard/images/account.png')}}" alt="" class="avatar img-fluid">{{auth()->user()->name}}
          </a>
          <div class="dropdown-menu dropdown-menu-start rounded">
            <a href="#" class="dropdown-item">
              <i class="las la-clock"></i>
              <span>Analytics</span>
            </a>
            <a href="#" class="dropdown-item">
             <i class="las la-cog"></i>
             <span>Settings</span>
           </a>
           <a href="#" class="dropdown-item">
             <i class="las la-question-circle"></i>
             <span>Log Out</span>
           </a>
           </div>
        </li>
      </ul>
    </div>
 </nav>
