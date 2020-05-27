@extends('layouts.main')

@section("title", "Our Members")

@section('content')

    @php
        $captions = ['Name', 'Job', 'Status', 'Company', ''];
    @endphp

    <x-table :captions="$captions">
        @foreach($members as $member)
            <x-table-row-member  :member="$member" />
        @endforeach
    </x-table>

@endsection