<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{ route('home') }}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="{{ url('assets/static/images/logo.png') }}" alt="{{ config('app.name') }}">
                                </div>
                            </div>

                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">
                                    {{ config('app.name') }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 {{ (Request::is('/') ? 'actived' : '') }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-home"></i>
                    </span>
                    <span class="title">
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="nav-item {{ (Request::is('expats/*') ? 'actived' : '') }}">
                <a class="sidebar-link" href="{{ route('expats.index') }}">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-user"></i>
                    </span>
                    <span class="title">
                        Expats
                    </span>
                </a>
            </li>

            @if(optional(auth()->user())->role !== 'user')
                <li class="nav-item {{ (Request::is('reports/*') ? 'actived' : '') }}">
                    <a class="sidebar-link" href="{{ route('reports') }}">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-files"></i>
                    </span>
                        <span class="title">
                        Reports
                    </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
