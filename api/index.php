<?php

// This file is the entry point for Laravel running on Vercel.

// Ensure Composer dependencies are loaded
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle the incoming request through the Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Send the response back to the browser
$response->send();

// Terminate the application
$kernel->terminate($request, $response);
