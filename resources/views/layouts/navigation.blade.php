<nav class="main-header navbar navbar-expand navbar-dark">
    
    <ul class="navbar-nav ms-auto">

        <li class="nav-item">
            <span class="nav-link text-white">
                {{ Auth::user()->name }}
            </span>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-danger btn-sm mt-1">
                    Logout
                </button>
            </form>
        </li>

    </ul>

</nav>