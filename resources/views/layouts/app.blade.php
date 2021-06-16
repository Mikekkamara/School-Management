<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="appContainer">
        <div class="sidebar">
            <ul class="sidebarLinks">
                <li><a href="{{ url('/home/category') }}">show categories</a></li>
                <li><a href="{{ url('/home/category/updates') }}">update storage</a></li>
                <li><a href="{{ route('reOrder') }}">items reorder</a></li>
                <li class="more"><a href="">more</a></li>
                <div class="moreLinks">
                    <ul>
                        <li><i class="fas fa-info"></i><a href="{{ route('about') }}"> About Us</a></li>
                        <li><i class="far fa-address-book"></i><a href="">Contacts</a></li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="contentContainer">
            <nav class="navigationBoard">
                <div class="dashboardTitle">
                    <p>Dashboard</p>
                </div>
                <div class="userName">
                    <a href="#">{{ Auth::user()->name }}</a>
                    <div class="dropdownDashboard">
                        <ul>
                            <li><i class="far fa-user-circle"></i><a href="/home/profile/{{ Auth::user()->id }}">View profile</a></li>
                            <li>
                                <i class="far fa-times-circle"></i>
                                <a href="{{ route('logout') }}" id="logoutButton"
                                onclick="event.preventDefault();
                                        document.getElementById('logoutForm').submit();">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="mobileNavigation">
                <button class="dropNavigationButton" id="dropnavigationButton" onclick="toggleFunction()"><i class="dropNavigation fas fa-bars"></i></button>
                <ul class="sidebarLinks" id="sidebarLinks">
                    <li><a href="{{ url('/home/category') }}">show categories</a></li>
                    <li><a href="{{ url('/home/category/updates') }}">update storage</a></li>
                    <li><a href="{{ route('reOrder') }}">items reorder</a></li>
                    <li class="more"><a href="#">more</a></li>
                    <div class="moreLinks">
                        <ul>
                            <li><i class="fas fa-info"></i><a href="{{ route('about') }}"> About Us</a></li>
                            <li><i class="far fa-address-book"></i><a href="">Contacts</a></li>
                        </ul>
                    </div>
                </ul>
        </div>

            <article class="yieldContent">
                @yield('content')
            </article>

            <footer class="footerBar">
                <div class="footerCopyright">
                    <p>School Management Systems &copy;2021</p>
                </div>
                <div class="footerDate">
                    <p id="time"></p>
                </div>
            </footer>

        </div>
    </div>
<form action="{{ route('logout') }}" id="logoutForm" method="POST">@csrf</form>
<script src="https://kit.fontawesome.com/9967e25fdf.js"crossorigin="anonymous"></script>
<script>

    window.onload = downScripts;
    function downScripts(){
        var element = document.createElement("script");
        element.src = "{{ asset('js/app.js') }}";
        document.body.appendChild(element);
    }

</script>
</body>
</html>
