<x-layout>
    <h1 class="text-3xl my-5 font-medium">All Jobs</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
            <div>
                <x-job-card :job="$job" />
            </div>
        @empty
            <p>No Jobs Available!</p>
        @endforelse
    </div>
</x-layout>


