
<nav>
    <div class="nav-wrapper indigo">
        <a href="#" class="brand-logo">EB</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
                <a href="">
                    <i class="fa fa-home fa-lg"></i>
                    Propiedades
                </a>
            </li>
            @if (!Auth::check())
                <li>
                    <a href="#">
                        <i class="fa fa-user-plus fa-lg"></i>
                        Registrarse
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sign-in-alt fa-lg"></i>
                        Entrar
                    </a>
                </li>
            @else
                <li>
                    <a href="#">
                        <i class="fa fa-sign-in-alt fa-lg"></i>
                        Home
                    </a>
                </li>
            @endif
            
            
        </ul>
    </div>
</nav>