@extends('partials.header')
    <body>
        @section('navBar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Coffee House</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbrSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Route::current()->getName === 'store' ? 'active' : null }}">
                        <a class="nav-link" href="/store">Store <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName === 'about' ? 'active' : null }}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName === 'contact' ? 'active' : null }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        @show
         <div class="container">
             @yield('content')
         </div>
    </body>
@extends('partials.footer')
