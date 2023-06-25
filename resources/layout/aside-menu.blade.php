<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item" aria-haspopup="true">
                <a href="#" class="menu-link">
                    <i class="menu-icon flaticon-home"></i>
                    <span class="menu-text">الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-customer"></i>
                    <span class="menu-text">العملاء</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('customer.create')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة عميل جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('customer.fileupload')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text"> رفع بيانات الزبائن عن طريق ملفات إكسل</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="{{route('customer.index')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة العملاء </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-customer"></i>
                    <span class="menu-text">المعرفون</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('acquaintance.create')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة معرف جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="{{route('acquaintance.index')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة المعرفون </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-customer"></i>
                    <span class="menu-text">الكفلاء</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('patron.create')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة كفيل جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="{{route('patron.index')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة الكفلاء </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-cart"></i>
                    <span class="menu-text">المنتجات</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة منتج جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة المنتجات </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-cart"></i>
                    <span class="menu-text">المنتجات التي يمكن توفيرها</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة منتج جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة المنتجات </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-user"></i>
                    <span class="menu-text">الموردين</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة مورد جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة الموردين </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-truck"></i>
                    <span class="menu-text">الموزعين</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة موزع جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة الموزعين </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-list"></i>
                    <span class="menu-text">الإجراءات القانونية</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة إجراء قانوني جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة الإجراءات القانوية </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-clipboard"></i>
                    <span class="menu-text"> طلبات الزبائن </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة طلب جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة  الطلبات </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-alarm"></i>
                    <span class="menu-text">مراكز الشرطة </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('police-office.create')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة مركز شرطة جديد</span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">عرض كافة مراكز الشرطة </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-law"></i>
                    <span class="menu-text">المحاكم</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('court.create')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة محكمة جديدة </span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text"> عرض كافة المحاكم</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-"></i>
                    <span class="menu-text">القضايا</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">إضافة قضية جديدة </span>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                            </div>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="#" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text"> عرض كافة القضايا</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
