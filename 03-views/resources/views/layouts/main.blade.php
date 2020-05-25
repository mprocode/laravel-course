<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @yield('title')
  </title>

  <style>
    .row {
        display: flex;
    }

    .col1 {
        flex: 20%;
        padding: 10px;
    }

    .col2 {
        flex: 70%;
        padding: 10px;
    }
  </style>
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('home')}}">Home</a></li>  
                    <li><a href="{{ route('members')}}">Team Members</a></li>  
                    <li><a href="{{ route('projects')}}">Our Projects</a></li>  
                </ul>
            </div>
        </div>
        <div class="col2">

            @yield('content')

        </div>
    </div>

</body>
</html>
