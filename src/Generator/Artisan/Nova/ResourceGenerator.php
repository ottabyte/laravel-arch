<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Generator\Artisan;

use BaseCodeOy\Arch\Artisan\Laravel\Nova\MakeResourceCommand;
use BaseCodeOy\Arch\Facade\Tree;
use BaseCodeOy\Arch\Generator\AbstractGenerator;

final class ResourceGenerator extends AbstractGenerator
{
    #[\Override()]
    public function generate(): void
    {
        foreach (Tree::get('nova.resources') as $resource) {
            $artisan = new MakeResourceCommand();
            $artisan->name($resource->name());
            $artisan->model($resource->name());
            $artisan->handle();
        }
    }
}
