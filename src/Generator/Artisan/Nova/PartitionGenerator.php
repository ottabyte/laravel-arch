<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Generator\Artisan;

use BaseCodeOy\Arch\Artisan\Laravel\Nova\MakePartitionCommand;
use BaseCodeOy\Arch\Facade\Tree;
use BaseCodeOy\Arch\Generator\AbstractGenerator;

final class PartitionGenerator extends AbstractGenerator
{
    #[\Override()]
    public function generate(): void
    {
        foreach (Tree::get('nova.partition') as $metric) {
            if (!$metric->partition()) {
                continue;
            }

            $artisan = new MakePartitionCommand();
            $artisan->name($metric->name());
            $artisan->handle();
        }
    }
}
