<x-layouts>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }}</p>
    <a href="/jobs">Back to jobs</a>
</x-layouts>
