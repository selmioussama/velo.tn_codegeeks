<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="">
                <span>
              Jetcycle
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cycle.html"> Our cycles </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link"  href="http://127.0.0.1:8000/veloLs">Location Velo </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="http://127.0.0.1:8000/eventsfront"> Events </a>
                           </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact us</a>
                        </li>


                        @if (Route::has('login'))

                            @auth

                            <li class="nav-item">
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> Login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"> Register </a>
                        </li>
                            @endauth
                        @endif
                    </ul>
                    <div class="quote_btn-container ">
                        <a href="" class="call_link">
                            <span> Call Now: </span>+01 1234567890
                        </a>
                        <a href="" class="cart_link">
                            <img src="images/cart.png" alt="">
                            <span class="cart_number">
                    0
                  </span>
                        </a>
                        <form class="form-inline ">
                            <button class="btn  nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
