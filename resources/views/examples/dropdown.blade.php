<section id="dropdowns">
    <h2 class="mt-5">Dropdowns</h2>
    <div class="my-2">
        <h3 class="mt-3" id="dropdown-nav">Dropdowns in navigation</h3>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#exampleNavbar"
                        aria-controls="exampleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="exampleNavbar">
                    <ul class="navbar-nav">
                        <x-bs::nav.item id="navbarDropdown1">
                            Navbar dropdown 1
                            <x-slot:dropdown>
                                <x-bs::dropdown.item href="#top">Top</x-bs::dropdown.item>
                                <x-bs::dropdown.item href="#top">Another menu item</x-bs::dropdown.item>
                            </x-slot:dropdown>
                        </x-bs::nav.item>
                        <x-bs::nav.item id="navbarDropdown2">
                            Navbar dropdown 2
                            <x-slot:dropdown>
                                <x-bs::dropdown.header>Headline 2.1</x-bs::dropdown.header>
                                <x-bs::dropdown.item href="#top">Item 2.1.1</x-bs::dropdown.item>
                                <x-bs::dropdown.item href="#top">Item 2.1.2</x-bs::dropdown.item>
                                <x-bs::dropdown.header>Headline 2.2</x-bs::dropdown.header>
                                <x-bs::dropdown.item href="#top">Item 2.2.1</x-bs::dropdown.item>
                                <x-bs::dropdown.item href="#top">Item 2.2.2</x-bs::dropdown.item>
                                <x-bs::dropdown.item href="#top">Item 2.2.3</x-bs::dropdown.item>
                            </x-slot:dropdown>
                        </x-bs::nav.item>
                        <x-bs::nav.item id="navbarDropdown3">
                            Navbar dropdown 3
                            <x-slot:dropdown class="dropdown-menu-end">
                                <x-bs::dropdown.item href="#top">Top</x-bs::dropdown.item>
                                <x-bs::dropdown.item href="#top">Another menu item</x-bs::dropdown.item>
                            </x-slot:dropdown>
                        </x-bs::nav.item>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="my-2">
        <h3 class="mt-3" id="dropdown-buttons">Dropdown buttons</h3>
        <div class="d-flex flex-row gap-3">
            @foreach($variants as $variant)
                <x-bs::dropdown.button :variant="$variant">
                    {{ $variant }} dropdown
                    <x-slot:dropdown class="dropdown-menu-end">
                        <x-bs::dropdown.item href="#top">Item 1</x-bs::dropdown.item>
                        <x-bs::dropdown.item>Item 2</x-bs::dropdown.item>
                    </x-slot:dropdown>
                </x-bs::dropdown.button>
            @endforeach
        </div>
        <div class="d-flex flex-row gap-3 mt-3">
            <x-bs::button.group>
                <x-bs::button.group>
                    @foreach(['primary', 'secondary'] as $variant)
                        <x-bs::dropdown.button :variant="$variant" :nested-in-group="true">
                            {{ $variant }} dropdown in group
                            <x-slot:dropdown>
                                <x-bs::dropdown.item href="#top">Item 1</x-bs::dropdown.item>
                                <x-bs::dropdown.item>Item 2</x-bs::dropdown.item>
                            </x-slot:dropdown>
                        </x-bs::dropdown.button>
                    @endforeach
                </x-bs::button.group>
                <x-bs::button.link href="#">Normal button in group</x-bs::button.link>
            </x-bs::button.group>
        </div>
    </div>
</section>
