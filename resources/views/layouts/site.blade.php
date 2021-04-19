<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Burntwood & Cannock Taekwondo | @yield('title')</title>
    <meta name="description" content="@yield('meta')">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ url('/css/tdo.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('js/lightbox2-2.11.3/src/css/lightbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/hamburgers.css') }}"/>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5M7KMSG');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="antialiased">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5M7KMSG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <button class="hamburger hamburger--collapse" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="mobile-navigation">
        <div class="inner">
            <ul>
                <li><a href={{ url('/') }}"">Home</a></li>
                <li><a href={{ url('/tigers') }}>Tigers</a></li>
                <li><a href="{{ url('/starting') }}">Starting</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/instructor') }}">Instructor</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/members') }}">Members</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </div>
    </div>


    <div class="container header">
        <div class="detail">
{{--            <p>Telephone <span>01543 570036</span></p>--}}
        </div>
        <div class="img">
            <a href="{{ url('/') }}"><img src="{{ url('images/header/burntwood-cannock-taekwondo-logo.png') }}" alt=""/></a>
        </div>
        <div class="img img-last">
            <a href="{{ url('/tigers') }}"><img src="{{ url('images/header/burntwood-cannock-taekwondo-tigers-logo.png') }}" alt=""/></a>
        </div>
        <div class="detail detail-last">
            <p style="text-align: right;">Call us <span>07773 901281</span></p>
        </div>
    </div>
    <div class="container navigation">
        <ul>
            <li>
                <a href="{{ url('/') }}">
                    <span>Home</span>
                    <div class="rollover home"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/tigers') }}">
                    <span>Tigers</span>
                    <div class="rollover tigers"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/starting') }}">
                    <span>Starting</span>
                    <div class="rollover starting"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/about') }}">
                    <span>About</span>
                    <div class="rollover about"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/instructor') }}">
                    <span>Instructor</span>
                    <div class="rollover instructor"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/contact') }}">
                    <span>Contact</span>
                    <div class="rollover contact"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/members') }}">
                    <span>Members</span>
                    <div class="rollover members"></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/gallery') }}">
                    <span>Gallery</span>
                    <div class="rollover gallery"></div>
                </a>
            </li>
        </ul>
    </div>
    @yield('content')

    @if (\Request::is('tigers'))
        <div class="footer tigers-yellow" >
            <div class="flex-footer">
                <div class="address">
                    <div class="address-flex">
                        <div class="img">
                            <img src="{{ url('images/footer/geo-pin.png') }}" />
                        </div>

                        <div>
                            <p>
                                <strong>Burntwood Tae Kwon Do Club</strong><br />
                                Erasmus Darwin Academy<br />
                                Pool Road, Burntwood<br />
                                Staffordshire  WS1 3QW<br />
                            </p>
                            <p>
                                <strong>Cannock Tae Kwon Do Club</strong><br />
                                Cannock Chase High School<br />
                                Upper School Gym, Calving Hill, Cannock<br />
                                Staffordshire  WS11 1JS<br />
                            </p>
                        </div>

                    </div>

                    <div class="phone-flex ">
                        <div class="img">
                            <img src="{{ url('images/footer/telephone.png') }}" />
                        </div>
                        <div>
                            <p>
{{--                                +44 (0) 1543 570036<br />--}}
                                +44 (0) 7773 901281
                            </p>
                        </div>
                    </div>
                    <div class="phone-flex ">
                        <div class="img">
                            <img src="{{ url('images/footer/envelope.png') }}" />
                        </div>
                        <div>
                            <p>
                                sean@bctaekwondo.co.uk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="phone desktop-show">
                    <div class="phone-flex">
                        <div class="img">
                            <img src="{{ url('images/footer/telephone.png') }}" />
                        </div>
                        <div>
                            <p>
{{--                                +44 (0) 1543 570036<br />--}}
                                +44 (0) 7773 901281
                            </p>
                        </div>
                    </div>
                    <div class="phone-flex">
                        <div class="img">
                            <img src="{{ url('images/footer/envelope.png') }}" />
                        </div>
                        <div>
                            <p>
                                sean@bctaekwondo.co.uk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="social-flex">
                    <ul>
                        <li><a href="https://www.facebook.com/groups/46632409696/" target="_blank"><img src="{{ url('images/footer/facebook-logo.png') }}"  style="width:45px; border-radius:5px;"/></a></li>
                        <li><a href="https://twitter.com/taekwondo_bc?lang=en" target="_blank"><img src="{{ url('images/footer/twitter-logo.png') }}"  style="width:45px; border-radius:5px;" /></a></li>
                        <li><a href="https://www.instagram.com/bctaekwondo/?hl=en" target="_blank"><img src="{{ url('images/footer/instagram-logo.png') }}"  style="width:45px;" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @else

    <div class="footer" >
        <div class="flex-footer">
            <div class="address">
                <div class="address-flex">
                    <div class="img">
                        <img src="{{ url('images/footer/geo-pin.png') }}" />
                    </div>

                    <div>
                        <p>
                            <strong>Burntwood Tae Kwon Do Club</strong><br />
                            Erasmus Darwin Academy<br />
                            Pool Road, Burntwood<br />
                            Staffordshire  WS1 3QW<br />
                        </p>
                        <p>
                            <strong>Cannock Tae Kwon Do Club</strong><br />
                            Cannock Chase High School<br />
                            Upper School Gym, Calving Hill, Cannock<br />
                            Staffordshire  WS11 1JS<br />
                        </p>
                    </div>

                </div>

                <div class="phone-flex ">
                    <div class="img">
                        <img src="{{ url('images/footer/telephone.png') }}" />
                    </div>
                    <div>
                        <p>
{{--                            +44 (0) 1543 570036<br />--}}
                            +44 (0) 7773 901281
                        </p>
                    </div>
                </div>
                <div class="phone-flex ">
                    <div class="img">
                        <img src="{{ url('images/footer/envelope.png') }}" />
                    </div>
                    <div>
                        <p>
                            sean@bctaekwondo.co.uk
                        </p>
                    </div>
                </div>
            </div>
            <div class="phone desktop-show">
                <div class="phone-flex">
                    <div class="img">
                        <img src="{{ url('images/footer/telephone.png') }}" />
                    </div>
                    <div>
                        <p>
{{--                            +44 (0) 1543 570036<br />--}}
                            +44 (0) 7773 901281
                        </p>
                    </div>
                </div>
                <div class="phone-flex">
                    <div class="img">
                        <img src="{{ url('images/footer/envelope.png') }}" />
                    </div>
                    <div>
                        <p>
                            sean@bctaekwondo.co.uk
                        </p>
                    </div>
                </div>
            </div>
            <div class="social-flex">
                <ul>
                    <li><a href="https://www.facebook.com/groups/46632409696/" target="_blank"><img src="{{ url('images/footer/facebook-logo.png') }}"  style="width:45px; border-radius:5px;"/></a></li>
                    <li><a href="https://twitter.com/taekwondo_bc?lang=en" target="_blank"><img src="{{ url('images/footer/twitter-logo.png') }}"  style="width:45px; border-radius:5px;" /></a></li>
                    <li><a href="https://www.instagram.com/bctaekwondo/?hl=en" target="_blank"><img src="{{ url('images/footer/instagram-logo.png') }}"  style="width:45px;" /></a></li>
                </ul>
            </div>
        </div>
    </div>
    @endif
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ url('/js/lightbox2-2.11.3/src/js/lightbox.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.hamburger').on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('is-active');
                $('.mobile-navigation').toggleClass('is-active');
            });
        });
    </script>
    @yield('scripts')

</body>
</html>
