@extends('layouts.index')
@section('title', 'PierCodes Admin Panel | Calls')
@section('content')
<nav class="navbar navbar-default navbar-static-top" style="background-color: #c0c8d0">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0;">

                <img class="img-responsive" src="{{ asset('images/piercodes_logo.png') }}" alt="Piercodes" style="height: 40px;" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3 class="text-center">
                    Piercodes Schedule
                	</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover ">
                        <thead>
                            <tr class="text-center">
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Project Detalis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->fullname}}</td>
                                <td>{{$schedule->phonenumber}}</td>
                                <td>{{$schedule->email}}</td>
                                <td>{{$schedule->companyname}}</td>
                                <td>{{$schedule->projectdetalis}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
</div>

@endsection
