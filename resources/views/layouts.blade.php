@extends('partials.header')
    <body>
        @section('navBar')
            {{--NavBar--}}
            <header class="header">
           		<h1 class="logo"><a href="#">Logo</a></h1>
                 <ul class="main-nav">
                     <li><a href="/">Home</a></li>
                     <li><a href="/store">Store</a></li>
                     <li><a href="/about">About</a></li>
                     <li><a href="/contact">Contact</a></li>
                 </ul>
            </header>
        @show
        {{--<div class="banner-top">--}}
            {{--<img src="{{ url('/images/cup-of-coffee2.jpg') }}" alt="banner">--}}
        {{--</div>--}}
         <div class="container">
             @yield('content')
         </div>
    </body>
@extends('partials.footer')
