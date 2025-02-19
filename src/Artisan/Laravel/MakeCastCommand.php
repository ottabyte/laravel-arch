<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Artisan\Laravel;

use BaseCodeOy\Arch\Artisan\AbstractCommand;

final class MakeCastCommand extends AbstractCommand
{
    public function inbound(): static
    {
        $this->option('inbound');

        return $this;
    }

    #[\Override()]
    protected function signature(): string
    {
        return 'make:cast';
    }
}
