<h1>{{ $title }}</h1>

<ol>
    @foreach($products as $p)
        <li> {{ $p['name'] }} </li>
    @endforeach
</ol>