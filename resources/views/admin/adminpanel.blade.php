@extends('layouts.index')
@section('title', 'PierCodes Admin Panel')
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
                <img class="img-responsive" src="{{asset('images/piercodes_logo.gif') }} " alt="Piercodes Logo" style="height: 40px;" />
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{ url('/add') }}"><i class="fa fa-pencil-square-o fa-2x"> Add New Project</i></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a id="edit_project" ><i class="fa fa-pencil-square-o fa-2x"> Edit Project</i></a>
                        
                    </div>
                    
                    <h3>EMAIL</h3>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{ url('/adminpanel/schedules') }}"><i class="fa fa-pencil-square-o fa-2x"> Schedule Mail</i></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{ url('/adminpanel/calls') }}" ><i class="fa fa-pencil-square-o fa-2x"> Call Mail</i></a>
                        
                    </div>
                </div>
                <!-- Edit Popup Begins -->
                <div class="edit-template">
                    <!-- Edit Title Begins -->
                    <h1>Projects List</h1>
                    <span>ـــــــــــــــــــــــــــــــــــــــ</span>
                    <!-- Edit Title Ends -->

                    <!-- Edit Projects List Begins -->
                    <p>Projects List Goes Here</p>
                    <!-- Edit Projects List Ends -->

                    <!-- Edit Controllers Begin -->
                    {{-- <button id="nextEdit">Next</button> --}}
                    <button id="cancelEdit">Cancel</button>
                    <!-- Edit Controllers End -->
                </div>
                <!-- Edit Popup Ends -->
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('#edit_project').on('click', function() {
            $('.edit-template').fadeIn(500);
        });
        $('#cancelEdit').on('click', function() {
            $('.edit-template').fadeOut(500);
        });
    });
</script>
@endpush
@endsection
