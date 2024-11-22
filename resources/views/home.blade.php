<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/lib/bootstrap.min.css" rel="stylesheet">
    <title>{{ $title }}</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container px-2">
            <a class="navbar-brand" href="#top">{{ $title}}</a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <ul class="navbar-nav me-md-auto">
                    <x-bs::nav.item href="#alerts">Alerts</x-bs::nav.item>
                    <x-bs::nav.item href="#badges">Badges</x-bs::nav.item>
                    <x-bs::nav.item href="#breadcrumbs">Breadcrumbs</x-bs::nav.item>
                    <x-bs::nav.item id="buttonsDropdown">
                        Buttons
                        <x-slot:dropdown>
                            <x-bs::dropdown.item href="#buttons">Buttons</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#button-links">Button-like links</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#button-groups">Button groups</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#button-toolbars">Button toolbars</x-bs::dropdown.item>
                        </x-slot:dropdown>
                    </x-bs::nav.item>
                    <x-bs::nav.item id="dropdownsDropdown">
                        Dropdowns
                        <x-slot:dropdown>
                            <x-bs::dropdown.item href="#dropdowns">Dropdowns</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#dropdown-nav">Navigation</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#dropdown-buttons">Buttons</x-bs::dropdown.item>
                        </x-slot:dropdown>
                    </x-bs::nav.item>
                    <x-bs::nav.item id="formsDropdown">
                        Forms
                        <x-slot:dropdown>
                            <x-bs::dropdown.header>Field types</x-bs::dropdown.header>
                            <x-bs::dropdown.item href="#forms">Forms</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#inputs">Input fields</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#textareas">Textareas</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#check-radio-switch">Check, radio, switch</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#selects">Selection fields</x-bs::dropdown.item>
                            <x-bs::dropdown.header>Parameters</x-bs::dropdown.header>
                            <x-bs::dropdown.item href="#input-groups">Input groups</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#disabled-readonly-required">Disabled, readonly, required</x-bs::dropdown.item>
                            <x-bs::dropdown.item href="#set-value-from-query">Set value from query</x-bs::dropdown.item>
                        </x-slot:dropdown>
                    </x-bs::nav.item>
                    <x-bs::nav.item href="#links">Links</x-bs::nav.item>
                    <x-bs::nav.item href="#lists">Lists</x-bs::nav.item>
                    <x-bs::nav.item href="#modals">Modals</x-bs::nav.item>
                    <x-bs::nav.item href="#nav">Navigation</x-bs::nav.item>
                </ul>
                <ul class="navbar-nav ms-md-auto mt-0">
                    <x-bs::nav.item href="https://github.com/portavice/bladestrap" target="_blank">GitHub
                    </x-bs::nav.item>
                    <x-bs::nav.item href="https://packagist.org/packages/portavice/bladestrap" target="_blank">
                        Packagist
                    </x-bs::nav.item>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid px-5">
    <h1 id="top">{{ $title }}</h1>

    @php
        $variants = [
            'primary',
            'secondary',
            'danger',
            'info',
            'success',
            'warning',
            'light',
            'dark',
        ];
    @endphp
    @include('examples.alerts')
    @include('examples.badges')
    @include('examples.breadcrumbs')
    @include('examples.buttons')
    @include('examples.dropdown')
    @include('examples.forms')
    @include('examples.lists')
    @include('examples.modals')
    @include('examples.navigation')
</div>
<script src="lib/bootstrap.bundle.min.js"></script>
</body>
</html>
