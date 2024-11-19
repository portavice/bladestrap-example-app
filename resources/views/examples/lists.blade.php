<section id="lists">
    <h2 class="mt-5">Lists</h2>
    <div class="row my-2">
        <div class="col-12 col-md-4 col-lg-3 col-xxl-2">
            <x-bs::list container="ul">
                @foreach($variants as $variant)
                    <x-bs::list.item :variant="$variant">{{ $variant }} item</x-bs::list.item>
                    <x-bs::list.item :variant="$variant" :active="true">active {{ $variant }} item</x-bs::list.item>
                    <x-bs::list.item :variant="$variant" :disabled="true">disabled {{ $variant }}item
                    </x-bs::list.item>
                @endforeach
            </x-bs::list>
        </div>
        <div class="col-12 col-md-4 col-lg-3 col-xxl-2">
            <div class="card" style="max-width: 300px;">
                <div class="card-header">
                    <h3 class="card-title">List in card</h3>
                </div>
                <x-bs::list :flush="true">
                    @foreach($variants as $variant)
                        <x-bs::list.item :variant="$variant">{{ $variant }} item</x-bs::list.item>
                    @endforeach
                    <x-bs::list.item>
                        Item
                        <x-slot:end>
                            <x-bs::badge variant="primary">Some text at the end</x-bs::badge>
                        </x-slot:end>
                    </x-bs::list.item>
                </x-bs::list>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-6 col-xxl-8">
            <x-bs::list container="ol" :horizontal="true">
                @foreach($variants as $variant)
                    <x-bs::list.item :variant="$variant">{{ $variant }} item</x-bs::list.item>
                @endforeach
            </x-bs::list>
        </div>
    </div>
</section>
