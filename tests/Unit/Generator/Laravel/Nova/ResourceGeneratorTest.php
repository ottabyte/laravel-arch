<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Generator\Laravel\Nova;

use BaseCodeOy\Arch\Generator\Laravel\Nova\ResourceGenerator;

it('should create a nova resource', function (): void {
    shouldCreateFiles([
        'app/Nova/User.php',
    ]);

    assertMatchesGeneratorSnapshot(ResourceGenerator::class, 'nova/resource/resource');
});
