<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @yield('title')
  </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @stack('styles')
  @stack('scripts')

</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li>
                        <a class=" {{  request()->routeIs('home') ? 'active' : '' }}  "
                            href="{{ route('home')}}">Home</a>
                    </li>  
                    <li>
                        <a class=" {{  request()->routeIs('members') ? 'active' : '' }}  "
                            href="{{ route('members')}}">Team Members</a>
                    </li>  
                    <li>
                        <a class=" {{  request()->routeIs('projects') ? 'active' : '' }}  "
                            href="{{ route('projects')}}">Our Projects</a>
                    </li>  
                </ul>
            </div>
        </div>
        <div class="col2">

            @yield('content')

        </div>
    </div>

</body>
</html>
