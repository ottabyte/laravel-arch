<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Model\Model;

use Illuminate\Support\Str;

final readonly class LocalScope
{
    public function __construct(
        private string $name,
    ) {
        //
    }

    public function name(): string
    {
        return Str::studly($this->name);
    }
}
