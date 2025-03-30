<header>
    <h1>Empresa</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}"
                    class="{{request()->routeIs('home') ? 'active' : ''}}"
                >Home</a>
            </li>
            <li>
                <a href="{{route('personal.index')}}"
                    class="{{request()->routeIs('personal.*') ? 'active' : ''}}"
                >Lista de Personal</a>
            </li>
        </ul>
    </nav>
</header>