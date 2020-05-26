@extends('layouts.main')

@section("title", "Dahsboard Home")

@section('content')


<h1>Home</h1>

<hr>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
.shadow {
    box-shadow: 0 1px 1px rgba(0,0,0,0.12), 
              0 2px 2px rgba(0,0,0,0.12), 
              0 4px 4px rgba(0,0,0,0.12), 
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);
}
.card { 
    width: 512px; 
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
</style>
@endpush

<div class="card-container">
    @foreach ($charts as $chart)
        <div class="card shadow">
            <div>
                <canvas id="chartjs-{{ $loop->index }}" class="chartjs" ></canvas>
                <script>
                    new Chart(
                        document.getElementById("chartjs-{{ $loop->index }}"),
                        @json($chart)
                    );
                </script>
            </div>
        </div>
    @endforeach
</div>

@endsection