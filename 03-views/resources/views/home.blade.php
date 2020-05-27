@extends('layouts.main')

@section("title", "Dahsboard Home")

@section('content')


@push('scripts')
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" 
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" 
        crossorigin="anonymous">
    </script>
@endpush

<div class="flex flex-row flex-wrap items-stretch">
    @foreach ($charts as $chart)
        <x-chart-card>
            <canvas id="chartjs-{{ $loop->index }}" class="chartjs" ></canvas>
            <script>
                new Chart(
                    document.getElementById("chartjs-{{ $loop->index }}"),
                    @json($chart)
                );
            </script>
        </x-chart-card>
    @endforeach
</div>

@endsection