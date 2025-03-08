<x-layout>
    <x-page-heading :color >The jobs related to the company of {{ $employer->name }}</x-page-heading>

    @foreach($employer->jobs as $job)
        <x-panel class="flex gap-x-6">
            <div>
                <x-employer-logo :employer="$employer" />
            </div>

            <div class="flex-1 flex flex-col">
                <a href="/companies/{{  $job->employer->id }}" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>

                <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
                    <a href="{{ $job->url }}" target="_blank">
                        {{ $job->title }}
                    </a>
                </h3>

                <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
            </div>

            <div>
                @foreach($job->tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </x-panel>
    @endforeach
</x-layout>
