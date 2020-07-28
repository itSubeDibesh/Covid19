<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('css/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('vendor/data-tables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

    <link rel="shortcut icon" href="{{ asset('images/icon/favicon.ico') }}" type="image/x-icon">
</head>

<body>
<div class="page-wrapper">
    <!-- HEADER MOBILE VIEW-->
    <header class="header-mobile d-block d-lg-none position-fixed fixed-top bg-white border">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="{{ route('back.dashboard') }}">
                        <img src="{{ asset('images/icon/logo.png') }}" alt="NYF"/>
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile js-scrollbar1 bg-white">
            <div class="container-fluid navbar-sidebar2">
                <ul class="menu-sidebar2__content list-unstyled navbar__list navbar-mobile__list list-unstyled bg-white">
                    <li class="active">
                        <a href="{{ route('back.dashboard') }}">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ route('back.reports') }}">
                            <i class="fas fa-map"></i>Reports</a>
                    </li>
                    <li>
                        <a href="{{ route('back.accounts.index') }}">
                            <i class="fas fa-users"></i>Accounts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE VIEW-->
    <!-- MENU SIDEBAR DESKTOP VIEW -->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="{{ route('back.dashboard') }}">
                <img src="{{ asset('images/icon/logo.png') }} " alt="Logo"/>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="{{ Route::is('back.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('back.dashboard') }}">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li class="{{ Route::is('back.reports') ? 'active' : '' }}">
                        <a href="{{ route('back.reports') }}">
                            <i class="fas fa-map"></i>Reports</a>
                    </li>
                    <li class="{{ Route::is('back.accounts.index') ? 'active' : '' }}">
                        <a href="{{ route('back.accounts.index') }}">
                            <i class="fas fa-users"></i>Accounts</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR DESKTOP VIEW -->
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP VIEW-->
        <header class="header-desktop">
            <div class="section__content section__content">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div></div>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img class="rounded-circle mx-auto d-block"
                                             style="max-height:45px; max-width:45px; min-width:45px; min-height:45px;"
                                             src="{{ isset(Auth::user()->image) ? asset('storage/'.Auth::user()->image) : asset('images/icon/defaultuser.png') }}"
                                             alt="Default user">
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <img class="rounded-circle mx-auto d-block"
                                                     style="max-height:65px; max-width:65px; min-width:65px; min-height:65px;"
                                                     src="{{ isset(Auth::user()->image) ? asset('storage/'.Auth::user()->image) : asset('images/icon/defaultuser.png') }}"
                                                     alt="Default user">
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                </h5>
                                                <span class="email">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a class="dropdown-item"
                                                   href="{{ route('back.settings.edit', Auth::user()->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('edit-form').submit();"><i
                                                        class="zmdi zmdi-settings"></i>
                                                    Profile Setting</a>
                                                <form id="edit-form"
                                                      action="{{ route('back.settings.edit', Auth::user()->id) }}"
                                                      method="GET"
                                                      style="display: none;">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                                    class="zmdi zmdi-power"></i>
                                                Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP VIEW-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @include('layouts.back.components.notifications')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
