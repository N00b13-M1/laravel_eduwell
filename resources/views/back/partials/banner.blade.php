<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('welcome.index') }}" class="logo">
                        <img src="{{ asset('assets/images/templatemo-eduwell.png') }}" alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        {{-- <li class=""><a href="{{ route('back.index') }}" class="active">Home</a></li> --}}
                        <li class=""><a href="{{ route('services.index') }}">Services</a></li>
                        <li class=""><a href="{{ route('titles.index') }}">Titles</a></li>
                        <li class=""><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
                        <li class=""><a href="{{ route('contact.index') }}">Contact Us</a></li>
                        <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed sm:block d-flex bg-light rounded-pill px-2">
                                    @auth
                                        {{-- <a href="{{ url('/dashboard') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline  text-info">Dashboard</a> --}}


                                        {{-- test logout --}}

                                                        <!-- Authentication -->
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                        
                                                            <x-responsive-nav-link :href="route('logout')"
                                                                    onclick="event.preventDefault();
                                                                                this.closest('form').submit();" class="text-primary">
                                                                {{ __('Log Out') }}
                                                            </x-responsive-nav-link>
                                                        </form>



                                        {{-- test logout --}}



                                    @else
                                        <a href="{{ route('login') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline text-info">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline ms-3 text-info">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

