<section id="forms">
    <h2 class="mt-5">Forms</h2>

    <h3 class="mt-3" id="inputs">Input fields</h3>
    @php
        $inputTypes = [
            'color' => '#dd2421',
            'date' => '2024-03-17',
            'datetime-local' => '2024-03-17 12:00',
            'email' => 'patrick.robrecht@portavice.de',
            'file' => null,
            'month' => '2024-03',
            'number' => 42,
            'password' => null,
            'range' => 100,
            'tel' => '+49 5251 522 507',
            'text' => 'Some random text',
            'time' => '12:00',
            'url' => 'https://example.org/',
            'week' => '2024W14',
        ];
    @endphp
    <div class="row">
        @foreach($inputTypes as $inputType => $value)
            @foreach([false, true] as $required)
                <x-bs::form.field container-class="col-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2"
                                  name="field_{{ $inputType }}" type="{{ $inputType }}" :required="$required"
                                  :value="$value">{{ $inputType }} input</x-bs::form.field>
            @endforeach
        @endforeach
    </div>

    <h3 class="mt-3" id="textareas">Textareas</h3>
    <div class="my-2">
        <x-bs::form.field name="field_textarea" type="textarea" rows="2"
                          value="Ein langer Text, der ganz ganz viele Wörter enthält, weshalb es unbedingt eine Textarea braucht, weil sonst gar nicht genug Platz ist">
            A textarea
        </x-bs::form.field>
    </div>

    <h3 class="mt-3" id="check-radio-switch">Check, radio, switch</h3>
    @php
        $optionsList = [
            'an array of integers' => [1 => 1, 2 => 2, 3 => 3],
            'an array of strings' => [1 => 'Test 1', 2 => 'Test 2'],
            'a \Portavice\Bladestrap\Support\Options object' => \Portavice\Bladestrap\Support\Options::fromArray([1 => 'Test 1', 2 => 'Test 2', 3 => 'Test 3']),
        ];
        $types = [
            'checkbox' => [1, 2],
            'radio' => 1,
            'switch' => [1, 2],
        ];
    @endphp
    @foreach($types as $type => $value)
        <h4>type="{{ $type }}"</h4>
        <div class="row my-2">
            @foreach($optionsList as $name => $options)
                <div class="col-12 col-md-6 col-lg-4 {{ $loop->last ? 'col-xl-6' : 'col-xl-3' }}">
                    <x-bs::form.field name="{{ \Illuminate\Support\Str::snake($type . '-' . $name) }}"
                                      type="{{ $type }}" :options="$options"
                                      :value="$value">{{ $type }} with {{ $name }}</x-bs::form.field>
                </div>
            @endforeach
        </div>
        <div class="row my-2">
            @foreach($optionsList as $name => $options)
                <div class="col-12 col-md-6 col-lg-4 {{ $loop->last ? 'col-xl-6' : 'col-xl-3' }}">
                    <x-bs::form.field name="{{ \Illuminate\Support\Str::snake($type . '-' . $name) }}"
                                      type="{{ $type }}" :options="$options"
                                      :value="$value"
                                      :disabled="true">disabled {{ $type }} with {{ $name }}</x-bs::form.field>
                </div>
            @endforeach
        </div>
    @endforeach

    <h3 class="mt-3" id="selects">Selection fields</h3>
    <div class="row my-2">
        @foreach($optionsList as $name => $options)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
                <x-bs::form.field name="{{ \Illuminate\Support\Str::snake('select-' . $name) }}"
                                  type="select" :options="$options"
                                  :value="$value">select with {{ $name }}</x-bs::form.field>
            </div>
        @endforeach
    </div>
    <div class="row my-2">
        @foreach($optionsList as $name => $options)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
                <x-bs::form.field name="{{ \Illuminate\Support\Str::snake('select-' . $name) }}"
                                  type="select" :options="$options"
                                  :value="$value"
                                  :disabled="true">disabled select with {{ $name }}</x-bs::form.field>
            </div>
        @endforeach
    </div>

    <h3 class="mt-3" id="input-groups">Input groups</h3>
    <div class="row my-2">
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <x-bs::form.field name="price_from" type="number" min="1" step="1">
                <x-slot:prependText>from</x-slot:prependText>
                Price
                <x-slot:appendText>€</x-slot:appendText>
            </x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <x-bs::form.field name="price2" type="number" min="1" step="1">
                Price
                <x-slot:appendText>€</x-slot:appendText>
            </x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="file" type="file">
                File
                <x-slot:appendText :container="false">
                    <x-bs::button.link href="#">Download</x-bs::button.link>
                </x-slot:appendText>
            </x-bs::form.field>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="price_from" type="number" min="1" step="1">
                <x-slot:prependText>from</x-slot:prependText>
                Price
                <x-slot:appendText :container="false">
                    <x-bs::form.field name="price_until" type="number" min="1" step="1" :nested-in-group="true">
                        <x-slot:prependText>until</x-slot:prependText>
                        <x-slot:appendText>€</x-slot:appendText>
                    </x-bs::form.field>
                </x-slot:appendText>
            </x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="amount_from" type="number" min="1" step="1">
                <x-slot:prependText>from</x-slot:prependText>
                Amount
                <x-slot:appendText :container="false">
                    <x-bs::form.field name="amount_until" type="number" min="1" step="1" :nested-in-group="true">
                        <x-slot:prependText>until</x-slot:prependText>
                        <x-slot:appendText :container="false">
                            <x-bs::form.field name="amount_with_step" type="number" min="1" step="1" :nested-in-group="true">
                                <x-slot:prependText>with step</x-slot:prependText>
                            </x-bs::form.field>
                        </x-slot:appendText>
                    </x-bs::form.field>
                </x-slot:appendText>
            </x-bs::form.field>
        </div>
    </div>

    <h3 class="mt-3" id="disabled-readonly-required">Disabled, readonly, required</h3>
    <div class="row my-2">
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="test-disabled" type="text" :disabled="true">Test disabled</x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="test-readonly" type="text" :readonly="true">Test readonly</x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <x-bs::form.field name="test-required" type="text" :required="true">Test required</x-bs::form.field>
        </div>
    </div>

    <h3 class="mt-3" id="set-value-from-query">Set value from query</h3>
    <div class="row my-2">
        <div class="col-12 col-md-6 col-lg-4">
            <a href="?test1=example-query#set-value-from-query">Query parameter example-query</a>
            <x-bs::form.field name="test1" type="text"
                              :from-query="true">Test1 from Query</x-bs::form.field>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <a href="?test2=example-query#set-value-from-query">Query parameter example-query</a>
            <x-bs::form.field name="test2" type="text" value="default-value"
                              :from-query="true">Test2 from Query</x-bs::form.field>
        </div>
    </div>
</section>
