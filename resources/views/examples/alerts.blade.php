<section id="alerts">
    <h2 class="mt-5">Alerts</h2>
    <div class="row my-2">
        <div class="col">
            @foreach($variants as $variant)
                <x-bs::alert :variant="$variant">{{ $variant }}</x-bs::alert>
            @endforeach
        </div>
        <div class="col">
            @foreach($variants as $variant)
                <x-bs::alert :variant="$variant" :dismissible="true">{{ $variant }}</x-bs::alert>
            @endforeach
        </div>
    </div>
</section>
