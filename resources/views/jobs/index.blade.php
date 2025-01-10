@extends('layout')


@section('content')
    <h2>Available Jobs</h2>
        <ul>
            @forelse($jobs as $job)
                @if($loop->even)
                <li>Even: {{ $job }}</li>
                @else
                    <li>Odd: {{ $job }}</li>
                @endif
            @empty
                <li>No Jobs Available!</li>
            @endforelse
        </ul>
@endsection


