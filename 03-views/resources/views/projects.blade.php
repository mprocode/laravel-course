@extends('layouts.main')

@section("title", "Our Projects")

@section('content')


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

    display: flex; 
    justify-content: space-between; 
    flex-direction: column;     
}
.card-container {
    display: flex; 
    justify-content: flex-start; 
    flex-direction: row; 
    flex-wrap:wrap;
}
.inactive {
    height: 15px;
    margin: 10px;
    text-align: center;
    background-color: indianred;
} 
.active {
    height: 20px;
    margin: 10px;
    text-align: center;
    background-color: mediumspringgreen;
} 
.loop-properties {
    display: flex; 
    justify-content: flex-start; 
    flex-direction: row;
    align-items: center;
}
.tag {
    color:#fff!important;
    background-color:#2196F3!important;
    padding-left:8px;
    padding-right:8px;
    margin: 8px;
    text-align:center
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

        @if ($p->active)
            <div class="active"> ACTIVE PROJECT </div>
        @endif

        @if (!$p->active)
            <div class="inactive"> INACTIVE PROJECT </div>
        @endif

        <div class="loop-properties">
            Loop Properties:
            <span class="tag">
                {{ $loop->index }} {{ $loop->iteration }}/{{ $loop->count }}
            </span>

            @if ($loop->first)  <span class="tag">First</span> @endif
            @if ($loop->last)  <span class="tag">Last</span> @endif
            @if ($loop->even)  <span class="tag">Even</span> @endif
            @if ($loop->odd)  <span class="tag">Odd</span> @endif

        </div>

        </div>
    @endforeach
</div>

@endsection