@props(['employer'])

<x-panel class="flex gap-x-6 mb-3">
    <div>
        <x-employer-logo :employer="$employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="/companies/{{ $employer->id }}">
                {{ $employer->name }}
            </a>
        </h3>
    </div>
</x-panel>
