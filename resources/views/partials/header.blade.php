<header>
    <div class="container">
        <div class="header-top">
            <ul>
                <li>
                    <a class="uppercase" href="#">DC power&#8480; visa&reg; </a>
                </li>
                <li>
                    <a class="uppercase" href="#">additional DC sites <span>&#9662;</span></a>
                </li>
            </ul>
        </div>
</header>
    <nav>
        <div class="container">
            <div class="header-bottom">
                <div class="logo">
                    <img src="{{'../img/dc-logo.png'}}" alt="">
                </div>
                <div class="menu-header">
                        <ul>
                        <li>
                            <a class="uppercase {{Request::route()->getName() =='home' ? 'active': ''}}" href="{{route('home')}}">Characters</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase {{Request::route()->getName() =='fumetto' ? 'active': ''}}" href="{{route('fumetto', 'id')}}">Comics</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">movies</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">tv</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">games</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">collectibles</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">videos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">fans</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">news</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="uppercase" href="#">shop</a>
                            <span>&#9662;</span>
                        </li>
                    </ul>
                </div>
                <div class="search-bar">
                    <div class="ricerca">
                        <input class="capitalize" type="search" name="search" value="search" placeholder="Search">
                    </div>
                    <div class="icona-lente">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
