@extends('layouts.main')

@section("title", "Our Members")

@section('content')


<h1>Members</h1>
<hr>

@push('styles')

<style>
.table-title {
    text-align: center;
    font-weight: bold;
}
.table-row > td {
    padding-right: 20px;
    text-align: left;
}
.table-row:hover {
    background-color: lightgray;
}
.avatar {
    vertical-align: middle;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
</style>

@endpush

<table>
    <thead>
        <tr class="table-title">
            <td>Name</td>
            <td>Job</td>
            <td>Status</td>
            <td>Company</td>
        </tr>
    </thead>
    <tbody>
        @forelse($members as $member)
            <tr class="table-row">
                <td>
                    <img src="{{ $member->avatar }}" class="avatar">
                    {{ $member->name }}
                </td>
                <td>{{ $member->jobTitle }}</td>
                <td>
                    @if ($member->active)
                        Active
                    @else 
                        Inactive
                    @endif
                </td>
                <td> {{ $member->company}} </td>
            </tr>
        @empty 
            <tr>
                <td colspan="4">[ empty ]</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection