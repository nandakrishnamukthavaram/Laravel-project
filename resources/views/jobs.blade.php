<x-layouts>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="hover:text-blue-700"> <a href="/jobs/{{ $job['id'] }}"> <b> {{ $job['title'] }} </b> pays
                    {{ $job['salary'] }} per
                    year.</a> </li>
        @endforeach
    </ul>

</x-layouts>
