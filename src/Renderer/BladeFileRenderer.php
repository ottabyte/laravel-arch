<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Arch\Renderer;

use BaseCodeOy\Arch\Contract\FileRendererInterface;
use Illuminate\Support\Facades\File;

final readonly class BladeFileRenderer implements FileRendererInterface
{
    #[\Override()]
    public function render(string $path, array $context): string
    {
        return (new BladeStringRenderer())->render(File::stub($path.'.blade.php'), $context);
    }
}
