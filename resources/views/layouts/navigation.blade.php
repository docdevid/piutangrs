<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebar-menu" aria-controls="sidebar-menu"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <x-tabler-logo />
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="d-none d-lg-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark"
                    title="Enable dark mode" data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                        width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round"><path
                            stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light"
                    title="Enable light mode" data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                        width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round"><path
                            stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown"
                        tabindex="-1" aria-label="Show notifications">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                            width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round"><path
                                stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path
                                d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Last updates</h3>
                            </div>
                            <div
                                class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-red d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#"
                                                class="text-body d-block">Example
                                                1</a>
                                            <div
                                                class="d-block text-muted text-truncate mt-n1">
                                                Change deprecated html tags to
                                                text decoration classes (#29604)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#"
                                                class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon text-muted"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"><path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                        fill="none" /><path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#"
                                                class="text-body d-block">Example
                                                2</a>
                                            <div
                                                class="d-block text-muted text-truncate mt-n1">
                                                justify-content:between ⇒
                                                justify-content:space-between
                                                (#29734)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#"
                                                class="list-group-item-actions show">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon text-yellow"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"><path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                        fill="none" /><path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#"
                                                class="text-body d-block">Example
                                                3</a>
                                            <div
                                                class="d-block text-muted text-truncate mt-n1">
                                                Update change-version.js
                                                (#29736)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#"
                                                class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"><path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                        fill="none" /><path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-green d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#"
                                                class="text-body d-block">Example
                                                4</a>
                                            <div
                                                class="d-block text-muted text-truncate mt-n1">
                                                Regenerate package-lock.json
                                                (#29730)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#"
                                                class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon text-muted"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"><path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                        fill="none" /><path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0"
                    data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm"
                        style="background-image: url({{Auth::user()->getFirstMediaUrl('pengguna','preview') ?? asset('static/default/default-user.png')}})"></span>
                    <div class="d-xl-block ps-2 d-none">
                        <div>{{Auth::user()->name}}</div>
                        <div class="mt-1 small text-muted">{{Auth::user()->email}}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="{{route('profile.edit')}}" class="dropdown-item">Pengaturan</a>
                    <button form="formLogout" class="dropdown-item">Logout</button>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">

                @can('show dashboard')
                <li
                    class="nav-item {{request()->is('dashboard*') ? ' active':''}}">
                    <a
                        class="nav-link"
                        href="{{route('dashboard')}}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-apps-filled"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path
                                    d="M9 3h-4a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z"
                                    stroke-width="0" fill="currentColor"></path>
                                <path
                                    d="M9 13h-4a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z"
                                    stroke-width="0" fill="currentColor"></path>
                                <path
                                    d="M19 13h-4a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2z"
                                    stroke-width="0" fill="currentColor"></path>
                                <path
                                    d="M17 3a1 1 0 0 1 .993 .883l.007 .117v2h2a1 1 0 0 1 .117 1.993l-.117 .007h-2v2a1 1 0 0 1 -1.993 .117l-.007 -.117v-2h-2a1 1 0 0 1 -.117 -1.993l.117 -.007h2v-2a1 1 0 0 1 1 -1z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Dashboard
                        </span>
                    </a>
                </li>
                @endcan

                @can('show piutang')
                <li
                    class="nav-item {{request()->is('piutang*') ? ' active':''}}">
                    <a class="nav-link" href="{{route('piutang.index')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-arrows-transfer-up"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path d="M7 21v-6"></path>
                                <path d="M20 6l-3 -3l-3 3"></path>
                                <path d="M17 3v18"></path>
                                <path d="M10 18l-3 3l-3 -3"></path>
                                <path d="M7 3v2"></path>
                                <path d="M7 9v2"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Piutang
                        </span>
                    </a>
                </li>
                @endcan

                @can('show pasien')
                <li
                    class="nav-item {{request()->is('pasien*') ? ' active':''}}">
                    <a class="nav-link" href="{{route('pasien.index')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-users"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path
                                    d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Pasien
                        </span>
                    </a>
                </li>
                @endcan

                @can('show jenis perawatan')
                <li
                    class="nav-item {{request()->is('jenis-perawatan*') ? ' active':''}}">
                    <a class="nav-link"
                        href="{{route('jenis-perawatan.index')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-clipboard-heart"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                <path
                                    d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                                <path
                                    d="M11.993 16.75l2.747 -2.815a1.9 1.9 0 0 0 0 -2.632a1.775 1.775 0 0 0 -2.56 0l-.183 .188l-.183 -.189a1.775 1.775 0 0 0 -2.56 0a1.899 1.899 0 0 0 0 2.632l2.738 2.825z"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Jenis Perawatan
                        </span>
                    </a>
                </li>
                @endcan

                @can('show pengguna')
                <li
                    class="nav-item {{request()->is('pengguna*') ? ' active':''}}">
                    <a class="nav-link" href="{{route('pengguna.index')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-cog"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5"></path>
                                <path
                                    d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M19.001 15.5v1.5"></path>
                                <path d="M19.001 21v1.5"></path>
                                <path d="M22.032 17.25l-1.299 .75"></path>
                                <path d="M17.27 20l-1.3 .75"></path>
                                <path d="M15.97 17.25l1.3 .75"></path>
                                <path d="M20.733 20l1.3 .75"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Pengguna
                        </span>
                    </a>
                </li>
                @endcan

                <li
                    class="nav-item {{request()->is('profile*') ? ' active':''}}">
                    <a class="nav-link" href="{{route('profile.edit')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-settings"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path
                                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Pengaturan
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}"
                        id="formLogout">@csrf</form>
                    <button form="formLogout" class="nav-link"
                        href="{{route('dashboard')}}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-logout"
                                width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none"></path>
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M9 12h12l-3 -3"></path>
                                <path d="M18 15l3 -3"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Logout
                        </span>
                    </button>
                </li>
            </ul>

            <div class="d-none d-md-inline bg-muted-lt p-2 rounded"
                style="margin-bottom: 20px;margin-left:10px;margin-right:10px;">

                <div
                    class="d-flex align-items-center justify-content-start gap-3">
                    @if(Auth::user()->getFirstMediaUrl('pengguna','preview'))
                    <img
                        class="rounded border"
                        src="{{Auth::user()->getFirstMediaUrl('pengguna','preview')}}"
                        style="width: 3rem;" />
                    @else
                    <img
                        class="rounded border border-dark"
                        src="{{asset('static/default/default-user.png')}}"
                        style="width: 3rem;" />
                    @endif
                    <div class="d-flex flex-column gap-1">
                        <span class='px-1'>{{Auth::user()->name}}
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-point-filled text-success"
                                width="16" height="16" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#000000"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"
                                    fill="none" />
                                <path
                                    d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>

                        </span>
                        <span class>{!!Auth::user()->roleWithBadge()!!}</span>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-settings d-none"
                            width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>