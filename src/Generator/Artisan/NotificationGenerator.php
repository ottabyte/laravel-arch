<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Generator\Artisan;

use BaseCodeOy\Arch\Artisan\Laravel\MakeNotificationCommand;
use BaseCodeOy\Arch\Facade\Tree;
use BaseCodeOy\Arch\Generator\AbstractGenerator;

final class NotificationGenerator extends AbstractGenerator
{
    #[\Override()]
    public function generate(): void
    {
        foreach (Tree::get('notifications') as $notification) {
            $artisan = new MakeNotificationCommand();
            $artisan->name($notification->name());
            $artisan->handle();
        }
    }
}
