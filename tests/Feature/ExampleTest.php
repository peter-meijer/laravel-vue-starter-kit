<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('returns a successful response', function (): void {
    $response = $this->get(route('home'));

    $response->assertOk();
});
