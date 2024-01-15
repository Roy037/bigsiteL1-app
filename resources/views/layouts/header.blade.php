<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="about">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="cars">cars</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">3</a>
            </li>
        </ul>
    </div>
</nav>
