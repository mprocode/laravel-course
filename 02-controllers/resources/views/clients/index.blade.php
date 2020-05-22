<h3>Clients:</h3>

<a href="{{ route('clients.create') }}">NEW</a>

<ul>
    @foreach($clients as $c)
    <li>    
        {{ $c['id']  }} | {{ $c['name'] }} |
        <a href="{{ route('clients.edit', $c['id']) }}">Edit</a> |
        <a href="{{ route('clients.show', $c['id']) }}">Info</a> |

        <form action="{{ route('clients.destroy', $c['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="remove">
        </form>
    </li>
    @endforeach
</ul>