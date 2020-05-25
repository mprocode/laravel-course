<h1>Projects</h1>
<hr>

<style>
.shadow {
    box-shadow: 0 1px 1px rgba(0,0,0,0.12), 
              0 2px 2px rgba(0,0,0,0.12), 
              0 4px 4px rgba(0,0,0,0.12), 
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);
}
.card {
    width: 350px; 
    margin: 20px;
    padding: 10px;
    border: 1px;
    border-style: solid;
    border-color: darkgrey;
    border-radius: 10px;
    background-color: #f5f5f5;
}
.card-container {
    display: flex; 
    justify-content: flex-start; 
    flex-direction: row; 
    flex-wrap:wrap;
}    
</style>

<div class="card-container">

    @foreach($projects as $p)
        <div class="shaddow card">
        <div>
            <h3>{{ $p->name }}</h3>
        </div>
        <div>
            <img src="{{ $p->picture }}" alt="">
        </div>
        <div>
            <h3>{{ $p->description }}</h3>
        </div>
        <div>
            TAGS:
            @foreach($p->hash_tags as $tag)
                <span>#{{ $tag }}</span>
            @endforeach
        </div>
        </div>
    @endforeach
</div>