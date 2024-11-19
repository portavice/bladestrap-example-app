<section id="modals">
    <h2 class="mt-5">Modals</h2>
    @php
        $modals = [
            'modal-default' => 'default',
            'modal-centered' => 'centered',
            'modal-no-fade' => 'without fade',
            'modal-scrollable' => 'scrollable',
            'modal-static-backdrop' => 'static-backdrop',
        ];
    @endphp
    @foreach($modals as $modalId => $text)
        <x-bs::button type="button" data-bs-toggle="modal" data-bs-target="#{{ $modalId  }}">Open {{ $text }}modal
        </x-bs::button>
    @endforeach
    <x-bs::modal id="modal-default">default</x-bs::modal>
    <x-bs::modal id="modal-centered" :centered="true">test</x-bs::modal>
    <x-bs::modal id="modal-no-fade" :fade="false">test</x-bs::modal>
    <x-bs::modal id="modal-scrollable" :scrollable="true">
        @foreach(range(1, random_int(40, 500)) as $int)
            <p>{{ $int }}</p>
        @endforeach
    </x-bs::modal>
    <x-bs::modal id="modal-static-backdrop" :static-backdrop="true">test</x-bs::modal>

    <h3 class="mt-3">Fullscreen</h3>
    @php
        $fullScreenModals = [
            'always' => true,
            'below sm' => 'sm',
            'below md' => 'md',
            'below lg' => 'lg',
            'below xl' => 'xl',
            'below xxl' => 'xxl',
        ];
    @endphp
    @foreach($fullScreenModals as $name => $fullScreen)
        <x-bs::button type="button" data-bs-toggle="modal" data-bs-target="#{{ $name  }}">Open {{ $name }}modal
        </x-bs::button>
    @endforeach
    @foreach($fullScreenModals as $name => $fullScreen)
        <x-bs::modal id="{{ $name }}" :full-screen="$fullScreen">
            <x-slot:title>A {{ $name }} modal</x-slot:title>
        </x-bs::modal>
    @endforeach

    <h3 class="mt-3">Buttons in footer</h3>
    @php
        $closeButtonModals = [
            'modal with default close button' => true,
            'modal with primary close button' => 'primary',
            'modal without close button' => false,
        ];
    @endphp
    @foreach($closeButtonModals as $name => $closeButton)
        <x-bs::modal.button
                :modal="\Illuminate\Support\Str::slug($name)">Open {{ $name }}</x-bs::modal.button>
    @endforeach
    <x-bs::modal.button modal="my-modal">Open modal</x-bs::modal.button>
    @foreach($closeButtonModals as $name => $closeButton)
        <x-bs::modal id="{{ \Illuminate\Support\Str::slug($name) }}" :close-button="$closeButton">
            <x-slot:title>A {{ $name }}</x-slot:title>
            Some text
        </x-bs::modal>
    @endforeach

    <x-bs::modal id="my-modal">
        <x-slot:title container="h2">My modal title</x-slot:title>
        <x-slot:footer>
            <x-bs::button>Test</x-bs::button>
        </x-slot:footer>
    </x-bs::modal>
</section>
