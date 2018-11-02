@extends('templater')
@push('heads')
<link rel="stylesheet" type="text/css" href="/css/main.css">
@endpush

@section('title', 'CopyPasteStack - Your Online Clipboard')

<?php

$navs = [

        ''              => "CopyPasteStack",
    ];

$current = \Request::segment(1) ?? "";

?>
@section('nav')
    @foreach ($navs as $link=>$view)
        <a href="/{{ $link }}"><li class="<?=($link==$current) ? "active" : ""?>">{{ $view }}</li></a>
    @endforeach
@endsection

@section('content_data_xyz')
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <a href="/"><h1 class="title"><span class="y">CopyPaste</span>Stack</h1></a>
                </div>
                <div class="col-lg-6 col-xs-6">
                    <div class="pull-right">
                        <input type="submit" class="float-right" name="search" id="searchBtn" value="Search">
                        <input type="text" class="float-right" name="query" id="search" placeholder="Search...">

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php /*
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <ul>
                        <?php //@yield('nav') ?>
                    </ul>
                </div>
                <div class="col-lg-6 col-xs-6">
                    @guest
                    <div class="float-right rnav">
                        <a href="/login">Login</a> / <a href="/register">Register</a>
                    </div>
                    @else
                    <div class="float-right">
                        <li class="rt">
                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Welcome {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('account') }}">
                                {{ __('My Profile') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        </li>
                    @endguest

                    </div>
                </div>
            </div>
        </div>
    </div>
*/ ?>
    <div class="body">
        <div class="container">
            @yield('content')
        </div>
    </div>

@endsection
