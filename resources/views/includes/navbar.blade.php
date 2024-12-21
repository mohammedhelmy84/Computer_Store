<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">متجر الكمبيوتر</h1>
        </a>

        <nav id="navmenu" class="navmenu" dir="rtl">
            <ul>

                <li><a href="{{ url('/') }}" class="active">الرئيسية</a></li>
                <li><a href="/contactus">اتصل بنا</a></li>
                <li><a href="/contactus">سلة المشتريات<i class="las la-shopping-cart"
                            style="font-size: 25px; color:yellow;"></i></a></li>
                @guest
                    <li><a href="/register">تسجيل</a></li>
                    <li><a href="/login">دخول</a></li>
                @endguest
                @auth
                    <li></li>
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul class="">
                            @can('admin')
                            <li><a href="{{ url('/dashboard') }}"><i class="las la-caret-square-left fs-6 pb-3">لوحة
                                التحكم</i></a></li>
                            @endcan
                            <li><a href="/logout"><i class="las la-sign-out-alt fs-6 pb-3">خروج</i></a></li>
                        </ul>
                    </li>
                @endauth


            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
