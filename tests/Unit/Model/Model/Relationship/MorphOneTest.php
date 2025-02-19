<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Arch\Model\Model\Relationship\MorphOne;

it('can create an instance', function (): void {
    $subject = new MorphOne(
        related: 'related',
        name: 'name',
        type: 'type',
        id: 'id',
        localKey: 'localKey',
    );

    expect($subject->related())->toBe('related');
    expect($subject->name())->toBe('name');
    expect($subject->type())->toBe('type');
    expect($subject->id())->toBe('id');
    expect($subject->localKey())->toBe('localKey');
});

it('can create an instance from a string', function (): void {
    $morphOne = MorphOne::fromString('related name type id localKey');

    expect($morphOne->related())->toBe('related');
    expect($morphOne->name())->toBe('name');
    expect($morphOne->type())->toBe('type');
    expect($morphOne->id())->toBe('id');
    expect($morphOne->localKey())->toBe('localKey');
});

it('can return an array representation', function (): void {
    $subject = new MorphOne(
        related: 'related',
        name: 'name',
        type: 'type',
        id: 'id',
        localKey: 'localKey',
    );

    expect($subject->toArray())->toMatchSnapshot();
});
