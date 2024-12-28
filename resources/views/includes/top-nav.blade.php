<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="\">Laravel</a>
        <button class="navbar-toggler"
            data-bs-target="#collapsibleNavbar" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    {{-- Blade --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            role="button">Blade</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('blade.vars') }}">Variables</a></li>
                            <li><a class="dropdown-item" href="{{ route('blade.array') }}">Array</a></li>
                            <li><a class="dropdown-item" href="{{ route('blade.extracted') }}">Extracted Array</a></li>
                        </ul>
                    </li>

                    {{-- Templates --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle='dropdown' href="#"
                            role="button">Templates</a>
                        <ul class="dropdown-menu">
                            @for ($i = 1; $i <= 4; $i++)
                                <li><a class="dropdown-item" href='{{ route("temp.page_$i") }}'>Page
                                        {{ $i }}</a></li>
                            @endfor
                        </ul>
                    </li>

                    {{-- Directives --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle='dropdown' href="#"
                            role="button">Directives</a>
                        <ul class="dropdown-menu">
                            @for ($i = 1; $i <= 7; $i++)
                                <li><a class="dropdown-item" href='{{ route("dirctv.page_$i") }}'>Page
                                        {{ $i }}</a></li>
                            @endfor
                        </ul>
                    </li>

                    {{-- Components --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle='dropdown' href="#">Components</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('comps.input') }}">input</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            @guest
                <div class="d-flex gap-2">
                    <div>
                        <a class="btn btn-success" href="{{ route('auth.login') }}">Login</a>
                    </div>

                    <div>
                        <a class="btn btn-warning" href="{{ route('auth.register') }}">Register</a>
                    </div>
                </div>
            @endguest

            @auth
                <div>
                    <a href="{{ route('users.account') }}">Account</a>
                </div>
            @endauth
    </div>
</nav>
