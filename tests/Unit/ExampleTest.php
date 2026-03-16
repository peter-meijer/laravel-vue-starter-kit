<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('that true is true', function (): void {
    expect(true)->toBeTrue();
});
