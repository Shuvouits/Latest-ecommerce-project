<?php
$lang = session()->get('lang');
?>

<nav class="navbar-wrapper">
    <form class="navbar-search" onsubmit="return false;">
        <button type="submit" class="navbar-search__btn">
            <i class="las la-search"></i>
        </button>
        <input type="search" name="navbar-search__field" id="navbar-search__field" placeholder="Search...">
        <button type="button" class="navbar-search__close"><i class="las la-times"></i></button>

        <div id="navbar_search_result_area">
            <ul class="navbar_search_result"></ul>
        </div>
    </form>

    <div class="navbar__left">
        <button class="res-sidebar-open-btn"><i class="las la-bars"></i></button>
        <button type="button" class="fullscreen-btn">
            <i class="fullscreen-open las la-compress" onclick="openFullscreen();"></i>
            <i class="fullscreen-close las la-compress-arrows-alt" onclick="closeFullscreen();"></i>
        </button>
    </div>

    <div class="navbar__right">
        <ul class="navbar__action-list">
            <li>
                <button type="button" class="navbar-search__btn-open">
                    <i class="las la-search"></i>
                </button>
            </li>
            <li>
                <a href="/" target="blank" class="font-weight-bold text--black">
                    <i class="las la-cart-plus"></i> Visit Store </a>
            </li>

            <li class="dropdown">

                @if($lang=='')
                <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-user">

                        <span class="navbar-user__thumb">
                            <img src="{{asset('images/5ffe84073745e1610515463.png')}}" alt="image">
                        </span>

                        <span class="navbar-user__info">
                            <span class="navbar-user__name">English</span>
                        </span>

                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="/admin/dashboard/lang/ba" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">Bangla</span>
                    </a>
                    <a href="/admin/dashboard/lang/spa" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">Spanish</span>
                    </a>
                    <a href="/admin/dashboard/lang/fr" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">france</span>
                    </a>
                    <a href="/admin/dashboard/lang/ger" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">german</span>
                    </a>
                </div>

                @endif

                @if($lang=='en')
                <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-user">

                        <span class="navbar-user__thumb">
                            <img src="{{asset('images/5ffe84073745e1610515463.png')}}" alt="image">
                        </span>

                        <span class="navbar-user__info">
                            <span class="navbar-user__name">English</span>
                        </span>

                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="/admin/dashboard/lang/ba" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">Bangla</span>
                    </a>
                    <a href="/admin/dashboard/lang/spa" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">Spanish</span>
                    </a>
                    <a href="/admin/dashboard/lang/fr" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">france</span>
                    </a>
                    <a href="/admin/dashboard/lang/ger" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">german</span>
                    </a>
                </div>

                @endif

                @if($lang=='ba')
                <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-user">

                        <span class="navbar-user__thumb">
                            <img src="{{asset('images/5ffe83f108a3d1610515441.png')}}" alt="image">
                        </span>

                        <span class="navbar-user__info">
                            <span class="navbar-user__name">Bangla</span>
                        </span>

                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="/admin/dashboard/lang/en" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">English</span>
                    </a>
                    <a href="/admin/dashboard/lang/spa" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">Spanish</span>
                    </a>
                    <a href="/admin/dashboard/lang/fr" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">france</span>
                    </a>
                    <a href="/admin/dashboard/lang/ger" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                        <span class="dropdown-menu__caption">german</span>
                    </a>
                </div>

                @endif

            </li>


            <li class="dropdown">
                <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb">
                            <img src="{{asset('images/5f950b85aad861603603333.jpg')}}" alt="image">
                        </span>

                        <span class="navbar-user__info">
                            <span class="navbar-user__name">admin</span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="#" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>

                    <a href="#" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>

                    <a href="/admin/logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>