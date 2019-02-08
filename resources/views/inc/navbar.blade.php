<nav class="navbar navbar-expand">
    <div class="collapse navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            @foreach($navigations as $navigation)
                <li class="nav-item {{ Request::is($navigation->path) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ $navigation->path}}"> {{$navigation->name}} <span
                            class="sr-only"></span></a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
