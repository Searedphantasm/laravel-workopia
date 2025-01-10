

<x-layout>
    <h1>Available Jobs</h1>
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
</x-layout>


