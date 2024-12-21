<aside id="sidebar">
    <div id="d-flex">
      <button id="toggle-btn" type="button">
        <i class="lni lni-grid-alt"></i>
    </button>
        <div class="sidebar-logo">
            <a href="#">Dashboard</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="dashboard" class="sidebar-link"><span>الرئيسية</span><i class="las la-user"></i></a>
            </li><!--/sidebae-item-->
            <li class="sidebar-item">
                <a href="{{route('register')}}" class="sidebar-link"><span>تسجيل مستخدم</span><i class="lar la-bell"></i></a>
            </li><!--/sidebae-item-->
            <li class="sidebar-item">
                <a href="{{route('category.index')}}" class="sidebar-link"><span>صفحة الأصناف</span><i class="las la-cog"></i></a>
            </li><!--/sidebae-item-->
            <li class="sidebar-item">
                <a href="#" class="sidebar-link"><span>خروج</span><i class="las la-sign-out-alt"></i></a>
            </li><!--/sidebae-item-->
         </ul> <!--/sidebae-nav-->
    </div>
</aside>
