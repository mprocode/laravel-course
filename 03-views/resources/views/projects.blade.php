@extends('layouts.main')

@section("title", "Our Projects")

@section('content')

<div class="flex flex-row flex-wrap items-stretch">

    @foreach($projects as $p)
        <div class="m-5">
            <x-project-card  :project="$p" />
        </div>
    @endforeach
    
</div>

@endsection