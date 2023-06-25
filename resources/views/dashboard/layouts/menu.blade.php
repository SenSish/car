<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                    <span class="brand-logo">

                    </span>
                    <h2 class="brand-text" style="font-size: 18px"></h2>

                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        @if (Auth::user()->type == 'admin')


            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('user.index') }}">
                    <i data-feather="user"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">user</span>
                </a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('counters.index') }}">
                    <i data-feather="cpu"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">counters</span>
                </a>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('invoices.index') }}">
                    <i data-feather="file-minus"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('city.index') }}">
                    <i data-feather="globe"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">City</span>
                </a>



            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('region.index') }}">
                    <i data-feather="map"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">Region</span>
                </a>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('subscriptions.index') }}">
                    <i data-feather="file-minus"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">Subscriptions</span>
                </a>
            </li>
            @else
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('user.profile') }}">
                    <i data-feather="file-minus"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">profile</span>
                </a>

                <a class="d-flex align-items-center" href="{{ route('user.invoices') }}">
                    <i data-feather="file-minus"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">invoice</span>
                </a>
            </li>
        @endif

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
