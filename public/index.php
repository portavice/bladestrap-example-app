<?php

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory as ViewFactoryContract;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;
use Portavice\Bladestrap\Macros\ComponentAttributeBagExtension;

require_once __DIR__ . '/../vendor/autoload.php';

// Fake Laravel's config() helper.
$configFile = [
    'bladestrap' => require __DIR__ . '/../vendor/portavice/bladestrap/config/bladestrap.php',
];
function config(array|string|null $key, mixed $default = null): mixed
{
    global $configFile;
    return Arr::get($configFile, $key, $default);
}

// Fake Laravel's request() helper.
$request = Request::capture();
function request(array|string|null $key = null, mixed $default = null): mixed
{
    global $request;
    return $key === null ? $request : $request->input($key, $default);
}

// Register macros as BladestrapServiceProvider would do.
ComponentAttributeBagExtension::registerMacros();

// Create a container and configure Blade
$container = (new class extends Container
{
    public function getNamespace(): string
    {
        return 'App\\';
    }
})::getInstance();
$container->instance(Application::class, $container);

$filesystem = new Filesystem();
$bladeCompiler = new BladeCompiler($filesystem, __DIR__ . '/../cache');

$viewResolver = new EngineResolver();
$viewResolver->register('blade', static fn () => new CompilerEngine($bladeCompiler));

$viewFinder = new FileViewFinder($filesystem, [__DIR__ . '/../resources/views']);
$viewFactory = new Factory($viewResolver, $viewFinder, new Dispatcher($container));
$viewFactory->addNamespace('bs', __DIR__ . '/../vendor/portavice/bladestrap/resources/views');
$viewFactory->share('errors', new ViewErrorBag());
$viewFactory->setContainer($container);
Facade::setFacadeApplication($container);

$container->instance(ViewFactoryContract::class, $viewFactory);
$container->alias(ViewFactoryContract::class, 'view'); /** @see View::getFacadeAccessor() */

$container->instance(BladeCompiler::class, $bladeCompiler);
$container->alias(BladeCompiler::class, 'blade.compiler'); /** @see Blade::getFacadeAccessor() */

// Render template with home.blade.php
echo $viewFactory->make('home', [
    'title' => 'Bladestrap Test App',
])->render();
