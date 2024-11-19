<section id="badges">
    <h2 class="mt-5">Badges</h2>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::badge :variant="$variant">{{ $variant }}</x-bs::badge>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::badge :variant="$variant" class="rounded-pill">{{ $variant }} rounded</x-bs::badge>
        @endforeach
    </div>
</section>
