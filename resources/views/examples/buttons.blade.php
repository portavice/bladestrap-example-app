<section id="buttons">
    <h2 class="mt-5">Buttons</h2>
    @php
        $buttonSizes = [
            'lg' => 'large',
            '' => 'default',
            'sm' => 'Small',
        ];
    @endphp
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button type="submit" :variant="$variant">{{ $variant }} button</x-bs::button>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button type="submit" :variant="$variant" :disabled="true">{{ $variant }} disabled</x-bs::button>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button type="button" variant="{{ 'outline-' . $variant }}" href="#buttons">{{ $variant }}
                outline
            </x-bs::button>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($buttonSizes as $size => $caption)
            <x-bs::button type="button" variant="primary" class="{{ 'btn-' . $size }}"
                          href="#buttons">{{ $caption }}</x-bs::button>
        @endforeach
    </div>

    <h3 class="mt-3" id="button-links">Button-like Links</h3>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button.link :variant="$variant" href="#buttons">{{ $variant }} link</x-bs::button.link>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button.link :variant="$variant" href="#buttons">{{ $variant }} disabed</x-bs::button.link>
        @endforeach
    </div>
    <div class="my-2">
        @foreach($variants as $variant)
            <x-bs::button.link variant="{{ 'outline-' . $variant }}" href="#buttons">{{ $variant }}link
            </x-bs::button.link>
        @endforeach
    </div>

    <h3 class="mt-3" id="button-groups">Button groups</h3>
    @foreach($buttonSizes as $size => $caption)
        <div class="my-2">
            <x-bs::button.group class="{{ 'btn-group-' . $size }}">
                <x-bs::button.link variant="primary">{{ $caption }} Button 1</x-bs::button.link>
                <x-bs::button.link variant="secondary">Button 2</x-bs::button.link>
            </x-bs::button.group>
        </div>
    @endforeach

    <h3 class="mt-3" id="button-toolbars">Button toolbars</h3>
    <div class="my-2">
        <x-bs::button.group class="me-2">
            <x-bs::button.link variant="primary">Button 1</x-bs::button.link>
            <x-bs::button.link variant="primary">Button 2</x-bs::button.link>
        </x-bs::button.group>
        <x-bs::button.group class="me-2">
            <x-bs::button.link variant="secondary">Button 3</x-bs::button.link>
            <x-bs::button.link variant="secondary">Button 4</x-bs::button.link>
            <x-bs::button.link variant="secondary">Button 5</x-bs::button.link>
        </x-bs::button.group>
        <x-bs::button.group class="me-2">
            <x-bs::button.link variant="danger">Button 6</x-bs::button.link>
        </x-bs::button.group>
    </div>
</section>
