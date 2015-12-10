<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Grad Planner' --}}
        @yield('title','Grad Planner')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/style.css' rel="stylesheet" type="text/css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    @if(\Session::has('flash_message'))
        <div class='flash_message'>
            {{ \Session::get('flash_message') }}
        </div>
    @endif

    <header>
        {{-- <a href='/'>
        <img
        src=''
        style='width:300px'
        alt='Grad Planner Logo'>
        </a> --}}
        <h1>Grad Planner</h1>
        <nav>
                {{-- @if(Auth::check()) --}}
                    <a class='btn btn-danger' role='button' href='/'>View Status</a>
                    <a class='btn btn-danger' role='button' href='/courses'> View All Courses</a>
                    <a class='btn btn-danger' role='button' href='/courses/create'> Add a Course</a>
                    <a class='btn btn-danger' role='button' href='/logout'>Log out</a>
                {{-- @else
                    <li><a href='/'>Home</a></li>
                    <li><a href='/login'>Log in</a></li>
                    <li><a href='/register'>Register</a></li>
                @endif --}}
        </nav>

    </header>


    <section>
        {{-- Main page content will be yielded here --}}
        <h1>@yield('title')</h1>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/dnvmbr/' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://p4.dannovember.me/' class='fa fa-link' target='_blank'> View Live</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
