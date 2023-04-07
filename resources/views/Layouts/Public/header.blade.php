<header class="sticky-top bg-white border-bottom border-default">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand" href="index.html">
                <img class="img-fluid" width="150px" src="images/logo.png" alt="LogBook">
            </a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
                <i class="ti-menu"></i>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route("homepage")}}">
                            homepage <i class=" ml-1"></i>
                        </a>
{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="index-full.html">Homepage Full Width</a>--}}
{{--                            <a class="dropdown-item" href="index-full-left.html">Homepage Full With Left Sidebar</a>--}}
{{--                            <a class="dropdown-item" href="index-full-right.html">Homepage Full With Right Sidebar</a>--}}
{{--                            <a class="dropdown-item" href="index-list.html">Homepage List Style</a>--}}
{{--                            <a class="dropdown-item" href="index-list-left.html">Homepage List With Left Sidebar</a>--}}
{{--                            <a class="dropdown-item" href="index-list-right.html">Homepage List With Right Sidebar</a>--}}
{{--                        </div>--}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("about")}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact")}}">Contact</a>
                    </li>


{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                           aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="author.html">Author</a>--}}
{{--                            <a class="dropdown-item" href="post-details-1.html">Post Details 1</a>--}}
{{--                            <a class="dropdown-item" href="post-details-2.html">Post Details 2</a>--}}
{{--                            <a class="dropdown-item" href="post-elements.html">Post Elements</a>--}}
{{--                            <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>--}}
{{--                            <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>

{{--                <select class="m-2 border-0" id="select-language">--}}
{{--                    <option id="en" value="about/" selected>En</option>--}}
{{--                    <option id="fr" value="fr/about/">Fr</option>--}}
{{--                </select>--}}

                <!-- search -->
                <div class="search px-4">
                    <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
                    <div class="search-wrapper">
                        <form action="javascript:void(0)" class="h-100">
                            <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                        </form>
                        <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
                    </div>
                </div>
                <ul class="navbar-nav">
{{--                    <li class="nav-item">--}}
{{--                        <button class="btn btn-info" href="">Register</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <button class="btn btn-info" href="">Login</button>--}}
{{--                    </li>--}}
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
                </ul>l
            </div>
        </nav>
    </div>
</header>
