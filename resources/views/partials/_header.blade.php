<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
        </ul>

        <ul class="nav-right">
            <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                    <i class="ti-bell"></i>
                </a>

                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                        <i class="ti-bell pR-10"></i>
                        <span class="fsz-sm fw-600 c-grey-900">
                            Notifications
                        </span>
                    </li>

                    <li>
                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                            <li>

                            </li>
                        </ul>
                    </li>

                    <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                            <a href="" class="c-grey-600 cH-blue fsz-sm td-n">
                                View All Notifications
                                <i class="ti-angle-right fsz-xs mL-10"></i>
                            </a>
                        </span>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-grey-900">{{ optional(auth()->user())->full_name }}</span>
                    </div>
                </a>

                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="{{ route('profile') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-user mR-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
