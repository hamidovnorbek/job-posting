<x-layout>
    <x-page-heading>Lis of companies</x-page-heading>
    <section>

        <div class="mt-6 space-y-6">
            @foreach($employers as $employer)
                <x-company-index :$employer />
            @endforeach
        </div>
    </section>



</x-layout>
