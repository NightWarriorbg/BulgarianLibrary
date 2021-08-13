<nav class="navbar navbar-light fixed-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            @include('includes.logo')
        </a>
        <div class="navbar-header">
            <button class="navbar-toggler text-end" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Начало</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Книги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">За нас</a>
                </li>
            </ul>

            <ul class="user-area navbar-nav user-panel ms-auto mb-2 mb-lg-0">

            @guest
                <!-- LOGIN/REGISTER -->
                    <li class="nav-item">
                        <button onclick="window.location.href='{{ route('login') }}'">Вход</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href='{{ route('register') }}'">Регистрация</button>
                    </li>
            @else
                <!-- Inbox panel-->
                    <li class="nav-item dropdown hidden-sm hidden-xs">
                        <span class="notification-counter"><span class="notification-counter-fixer">5</span></span>
                        <a href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/icons/ic_inbox_black_18dp_2x.png') }}" alt="Inbox messages">
                        </a>

                        <ul id="inbox-notifications-panel" class="dropdown-menu dropdown-menu-left">
                            <li class="dropdown-header">Лични съобщения (2 нови)</li>

                            <li><a href="#">Гошо Юрданов ти изпрати съобщение.</a></li>
                            <li><a href="#">Нено ти отговори на съобщение.</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Виж всички</a></li>
                        </ul>
                    </li>

                    <!-- Notifications panel -->
                    <li class="nav-item dropdown hidden-sm hidden-xs">
                        <span class="notification-counter"><span class="notification-counter-fixer">25</span></span>
                        <a href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/icons/ic_lightbulb_outline_black_18dp_2x.png') }}"
                                 alt="Notifications">
                        </a>

                        <ul id="user-notifications-panel" class="dropdown-menu">
                            <li class="dropdown-header">Известия (12 нови)</li>

                            <li><a href="#">Открит е лек за Covid-18</a></li>
                            <li><a href="#">бля бля бля</a></li>
                            <li><a href="#">Галка отговори на твоя коментар</a></li>
                            <li><a href="#">дрън дръ</a></li>
                            <li><a href="#">Пешо отговори на твоя коментар</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Виж всички</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hidden-sm hidden-xs">
                        <a href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/no-avatar.jpg') }}" style="" alt="Avatar"
                                 class="avatar">{{ Auth::user()->username }} <i
                                class="bi bi-caret-down-fill"
                                style="font-size: 10px;"></i>
                        </a>

                        <!-- Profile panel-->
                        <ul id="user-panel" class="dropdown-menu">
                            <li><a href="#">Прегледай профила</a></li>
                            <li><a href="#">Приятели</a></li>
                            <li><a href="#">Моите ревюта</a></li>
                            <li><a href="#">Моите кометнтари</a></li>
                            <li><a href="#">Любими книги</a></li>
                            <li><a href="#">Любими жанрове</a></li>
                            <li><a href="#">Настройки</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" style="color: #e74c3c;"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Изход
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
