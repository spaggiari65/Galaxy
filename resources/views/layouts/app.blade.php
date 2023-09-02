<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Galaxy Footware') }}</title>

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('../bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('../bootstrap/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('../bootstrap/js/slim.min.js') }}" defer></script>

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link href="{{ asset('../bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico">

</head>

<body>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container navbar nav mynav">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __() }}
                    <img src="../images/footware/logo.png" alt="Galaxy Footware" height="100px" width="100px" >
                </a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <div class = "mynav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <a class="navbar-item nav-link cnav" href="/profile">
                        {{ __('Profile ') }}
                    </a>
                    <a class="nav-item nav-link cnav" href="/chatify">
                        {{ __('Message') }}
                    </a>
                    <a class="nav-item nav-link cnav" href="/match">
                        {{ __('Match') }}
                    </a>
                    
                </div>

                    <ul class="navbar ms-auto ">
                        <!-- Authentication Links -->
                        
                        @guest
                        
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> 
                </div>
            </div>
        </nav>  --}}


    <nav class="topnav">
        <a class="navimg" href="{{ url('/') }}">
            {{ __() }}
            <img src="../images/footware/logo.png" alt="Galaxy Footware" height="100px" width="100px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <div class="mynav">

            </ul>

            <!-- Right Side Of Navbar -->
            <a class="navbar-item nav-link cnav" href="/profile">
                {{ __('Profile ') }}
            </a>
            <a class="nav-item nav-link cnav" href="/chatify">
                {{ __('Message') }}
            </a>
            <a class="nav-item nav-link cnav" href="/match">
                {{ __('Match') }}
            </a>

        </div>
    </nav>





    <main class="py-4">
        @yield('content')
    </main>
    </div>




    {{-- <br/>
<br/>
    <footer class="page-footer font-small teal pt-4">
       <div class="medias">
           <div class="container-fluid">
               <div class="row">

                   <div class="col-md-3 leftcol">
                   <h2>About us</h2>                    <br/>

                   <p>Galaxy Footware is dedicated company for providing quality footware products at best prices.</p>  <br/>
                   
                   <i class="fa fa-phone">  +977 9851232514</i>   <br/>
                   <i class="fa fa-envelope-square"> info@galaxy.com.np</i> 
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-2 rightcol">
                     <h2> <u>Navigation</u> </h2> <br>
                     <h3><a href="https://edublogs.org/">Blog </a> </h3>
                     <h3><a href="https://osa.gse.harvard.edu/student-testimonials">Testimonials </a> </h3>
                     <h3><a href="https://www.socialtables.com/blog/event-planning/college-event-ideas/"> Events </a> </h3>
                     <h3><a href="https://scholar.google.com/"> Journal </a> </h3>
                </div>

                <div class="col-md-2">
                    <h2> <u>Categories</u> </h2> <br>
                     <h3><a href="https://edublogs.org/">Hip Hop </a> </h3>
                     <h3><a href="https://osa.gse.harvard.edu/student-testimonials">Modern </a> </h3>
                     <h3><a href="https://www.socialtables.com/blog/event-planning/college-event-ideas/"> Break Dance </a> </h3>
                     <h3><a href="https://scholar.google.com/"> Tubelight </a> </h3>
                </div>

                <div class="col-md-2">
                    <h2> <u>Help & Support</u> </h2> <br>
                     <h3><a href="https://edublogs.org/"> FAQs </a> </h3>
                     <h3><a href="https://osa.gse.harvard.edu/student-testimonials">Supports </a> </h3>
                     <h3><a href="https://www.socialtables.com/blog/event-planning/college-event-ideas/"> Resources </a> </h3>
                     <h3><a href="https://scholar.google.com/"> Tubelight </a> </h3>
                </div>
                
                   <div class="col-md-2 midcol"> 
                    <h2><u>Find Us</u></h2>
                    <br/>

                    +977 9811474050 <i class="fa fa-phone">  </i>   <br/>
                    <p>Kathmandu <i class="fa-solid fa-location"></i>   <br/></p>
                    infor@galaxy.com.np <i class="fa fa-envelope-square"> </i>  <br/>
                    <br/>

                        <a href="https://www.facebook.com/WWENetwork/" target="_blank" title="Join us on Facebook"><i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x" id="fb"> </i></a> 
                        <a href="https://twitter.com/WWE" target="_blank" title="Follow us on Twitter"><i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"></i></a> 
                        <a href="https://www.instagram.com/wwe/?hl=en"  target="_blank" title="Join us on Instragram"><i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" id="insta"></i></a>  <br/><br/>
                       {{-- <a href="https://www.youtube.com/watch?v=5MgBikgcWnY"  target="_blank" title="Get us on Youtube"><i class="fa fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x" id="yt"></i></a> 
                        <a href="https://www.linkedin.com/company/world-wrestling-entertainment/"  target="_blank" title="Join us on Linkedin"><i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x" id="linkedin"></i></a>
                        <a href="aprabesh65@gmail.com"  target="_blank" title="Join Us on Google plus"><i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x" id="google"></i></a>
                        <a href="https://www.reddit.com/"  target="_blank" title="Join us on reddit"><i class="fa fa-reddit fa-lg white-text mr-md-5 mr-3 fa-2x" id="reddit"></i></a> 
                        <a href="https://www.pinterest.com/"  target="_blank" title="Join us on Pinterest"><i class="fa fa-pinterest fa-lg white-text mr-md-5 mr-3 fa-2x" id="pi"></i></a>
                      --)   }}
                    </div>

            </div>
         </div>
              
       </div>
    
       <div class="copyright">
        <div class="footer-copyright text-center py-3">&copy; 2023 Copyright;
            <b>Galaxy Footware</b> 
           </div>
           </div>
           <div class="blank"></div>
      </footer>  --}}
</body>

</html>
