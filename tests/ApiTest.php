<?php

use Illuminate\Support\Facades\Http;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('auth user', function () {
    Http::fake([
        'https://laravel.com' => Http::response(status: 500),
        'https://nova.laravel.com/' => Http::response(),
    ]);
});
