<section id="nav">
    <h2 class="mt-5">Navigation</h2>

    <h3 class="mt-3">Horizontal navigation</h3>
    @php
        $variants = [
            '' => '',
            'nav-tabs' => 'as tabs',
            'nav-pills' => 'as pills',
            'nav-underline' => 'underlined',
            'nav-pills nav-fill' => 'Fill and justify',
        ];
    @endphp
    @foreach($variants as $additionalClass => $headline)
        <div class="my-2">
            <x-bs::nav class="{{ $additionalClass }}">
                <x-bs::nav.item href="http://bladestrap-test-app.localhost/">Items {{ $headline }}</x-bs::nav.item>
                <x-bs::nav.item href="https://portavice.de/" target="_blank">portavice.de</x-bs::nav.item>
                <x-bs::nav.item href="https://github.com/portavice/bladestrap" target="_blank" :disabled="true">Disabled item</x-bs::nav.item>
            </x-bs::nav>
        </div>
    @endforeach

    <div class="my-2">
        <h3 class="mt-3">Vertical navigation</h3>
        <x-bs::nav container="ol" :vertical="true">
            <x-bs::nav.item>Item 1</x-bs::nav.item>
            <x-bs::nav.item>Item 2</x-bs::nav.item>
        </x-bs::nav>
    </div>
</section>
