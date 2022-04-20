<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="" class="logo">
                        <img src="{{ asset('assets/images/templatemo-eduwell.png') }}" alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                        <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
                        <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li>
                        <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed sm:block d-flex bg-light rounded-pill px-2">
                                @auth
                                    <a href="{{ url('/back') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline  text-info">Dashboard</a>
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
