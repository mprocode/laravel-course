<h1>{{ $title }}</h1>

<ol>
    @foreach($products as $p)
        <li> 
            {{ $p['name'] }}  
            <a href="{{ route('productInfo', $loop->index  ) }}">[show details]</a>
            @if ( isset($selected) && $selected['id'] == $p['id'] )
                <<<<<
            @endif
        </li>
    @endforeach
</ol>

<hr>

@if ( isset($selected) )

<h1>Product Detail</h1>

<h3>ID: {{ $selected['id'] }} </h3>
<h3>Name: {{ $selected['name'] }} </h3>
<h3>Description: {{ $selected['description'] }} </h3>

@endif